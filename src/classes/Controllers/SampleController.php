<?php
namespace Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Atlas\Orm\AtlasBuilder;
use Psr\Container\ContainerInterface;

use DataSource\Customer\Customer;
use DataSource\Order\Order;
use DataSource\Product\Product;
use Slim\Views\Twig;

class SampleController
{
    protected $container;
    protected $atlas;

    // construct method
    public function __construct (ContainerInterface $container)
    {
        $this->container = $container;
        // Atlas setting
        $args = [
            'mysql:unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock;host=127.0.0.1;port=8889;dbname=my_slim;charset=utf8;',
            'root',
            'root',
        ];
        // create AtlasBuilder
        $atlasBuilder = new AtlasBuilder(...$args);
        // builder setting
        $atlasBuilder->setFactory(function ($class) use ($container) {
            if ($container->has($class)) {
                return $this->container->get($class);
            }
            return new $class();
        });
        // create Atlas
        $this->atlas = $atlasBuilder->newAtlas();
    }

    public function index(Request $request, Response $response, $args) {
        // get customer record
        $data = $this->atlas
            ->select(Customer::class)->fetchRecords();
        $arg = [
            'data' => $data,
        ];
        // return rendered object
        return $this->container->get(Twig::class)->render($response, 'index.phtml', $arg);
    }

    public function add(Request $request, Response $response, $args) {
        $arg = [
            'header' => 'Create',
            'message' => 'create new Customer',
            'sendto' => '/add',
            'target' => [
                'corp' => '',
                'staff' => '',
                'mail' => '',
                'tel' => '',
                'address' => ''
            ]
        ];

        return $this->container->get(Twig::class)->render($response, 'add.phtml', $arg);
    }

    public function create(Request $request, Response $response, $args) {
        $body = $request->getParsedBody();

        $rec = $this->atlas->newRecord(Customer::class, $body);
        $this->atlas->insert($rec);

        return $response->withHeader('Location', '/')->withStatus(301);
    }
}