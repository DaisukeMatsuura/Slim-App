<?php
namespace Controllers;

use Slim\App;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Atlas\Orm\AtlasBuilder;
use Psr\Container\ContainerInterface;
use App\Application\Middleware\SessionMiddleware;
use Slim\Views\Twig;

use DataSource\Article\Article;
use DataSource\Comment\Comment;
use DataSource\User\User;

class BoardController
{
    protected $container;
    protected $atlas;

    //construct
    public function __construct(ContainerInterface $containerInterface)
    {
        session_start();
        $this->container = $containerInterface;

        $args = [
            'mysql:unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock;host=127.0.0.1;port=8889;dbname=my_slim;charset=utf8;',
            'root',
            'root',
        ];
        $atlasBuilder = new AtlasBuilder(...$args);
        $atlasBuilder->setFactory(function ($class) {
            if ($this->container->has($class)) {
                return $this->container->get($class);
            }
            return new $class;
        });
        $this->atlas = $atlasBuilder->newAtlas();
    }

    //access login page.
    public function login (Request $request, Response $response, $args)
    {
        $arg = [
            'message' => 'Logout and Login.',
            'user' => [
                'username' => '',
            ],
        ];
        unset($_SESSION['id']);
        unset($_SESSION['username']);

        return $this->container->get(Twig::class)
            ->render($response, './boards/login.phtml', $arg);
    }

    //send login form.
    public function signin (Request $request, Response $response, $args)
    {
        $body = $request->getParsedBody();
        $data = $this->atlas->select(User::class)
            ->where('username = ', $body['username'])
            ->andWhere('password = ', $body['password'])
            ->fetchRecords();

        if (count($data) > 0) {
            $_SESSION['username'] = $body['username'];
            $_SESSION['id'] = $data[0]->id;
                return $response
                    ->withHeader('Location', '/board')
                    ->withStatus(301);
        } else {
            $arg = [
                'message' => 'Wrong username/password...',
                'user' => $body
            ];
            return $this->container->get(Twig::class)
                ->render($response, './boards/login.phtml', $arg);
        }
    }

    //board main page.
    public function index (Request $request, Response $response, $args)
    {
        if (!isset($_SESSION['id'])) {
            return $response
                ->withHeader('Location', '/board/login')
                ->withStatus(301);
        }

        $data = $this->atlas->select(Article::class)
            ->with(['users'])
            ->orderBy('created desc')
            ->fetchRecords();

        $arg = [
            'user_id' => $_SESSION['id'],
            'username' => $_SESSION['username'],
            'data' => $data
        ];

        return $this->container->get(Twig::class)
            ->render($response, './boards/index.phtml', $arg);
    }

    // article page.
    public function article (Request $request, Response $response, $args)
    {
        if (!isset($_SESSION['id'])) {
            return $response
                ->withHeader('Location', '/board/login')
                ->withStatus(301);
        }
        $id = $args['id'];

        $data = $this->atlas->select(Article::class)
            ->where('id = ', $id)
            ->with(['users'])
            ->orderBy('created desc')
            ->fetchRecord();

        $comments = $this->atlas->select(Comment::class)
            ->where('article_id = ', $id)
            ->with(['users'])
            ->orderBy('id desc')
            ->fetchRecords();

        $Parsedown = new \Parsedown();
        $content = $Parsedown->text('### '. $data->content);

        $arg = [
            'id' => $id,
            'user_id' => $_SESSION['id'],
            'username' => $_SESSION['username'],
            'message' => 'article & comments',
            'content' => $content,
            'article' => $data,
            'comments' => $comments
        ];

        return $this->container->get(Twig::class)
            ->render($response, './boards/article.phtml', $arg);
    }

    // send comment.
    public function post_comment (Request $request, Response $response, $args)
    {
        $body = $request->getParsedBody();
        $body['article_id'] = $args['id'];
        $body['user_id'] = $_SESSION['id'];
        $comment = $this->atlas->newRecord(Comment::class, $body);
        $this->atlas->insert($comment);
        return $response
            ->withHeader('Location', '../../board/article/' . $args['id'])
            ->withStatus(301);
    }

    // user page
    public function user (Request $request, Response $response, $args)
    {
        if (!isset($_SESSION['id'])) {
            return $response
                ->withHeader('Location', '/board/login')
                ->withStatus(301);
        }

        $user = $this->atlas->fetchRecord(User::class, $args['id']);

        $articles = $this->atlas->select(Article::class)
            ->where('user_id = ', $args['id'])
            ->orderBy('created desc')
            ->fetchRecords();

        $f = (int)$args['id'] == (int)$_SESSION['id'];

        if ($f) {
            $comments = $this->atlas->select(Comment::class)
                ->where('user_id = ', $user->id)
                ->with(['articles'])
                ->orderBy('id desc')
                ->fetchRecords();
        } else {
            $comments = [];
        }

        $arg = [
            'f' => $f,
            'user_id' => $_SESSION['id'],
            'user' => $user,
            'username' => $_SESSION['username'],
            'message' => 'USER = "' . $user->username . '".',
            'articles' => $articles,
            'comments' => $comments,
        ];

        return $this->container->get(Twig::class)
            ->render($response, './boards/user.phtml', $arg);
    }

    // send article
    public function post_article (Request $request, Response $response, $args)
    {
        $body = $request->getParsedBody();
        $body['created'] = date('Y-m-d G:i:s');
        $body['user_id'] = $_SESSION['id'];
        $article = $this->atlas->newRecord(Article::class, $body);
        $this->atlas->insert($article);
        return $response
            ->withHeader('Location', '/board')
            ->withStatus(301);
    }
}