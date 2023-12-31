<?php
namespace Deep\US4\Router;
class NoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface
{
    public function process(\Magento\Framework\App\RequestInterface $request)
    {
        $requestValue = ltrim($request->getPathInfo(), '/');
        $request->setParam('q', $requestValue);
        $request->setModuleName('contact')->setControllerName('index')->setActionName('index');
        return true;
    }
}