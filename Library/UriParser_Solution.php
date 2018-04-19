<?php
class UriParser_Solution
{
    /**
     * Diese Methode wertet die Request URI aus und gibt den Controllername zurück.
     */
    public static function getControllerName()
    {
        $uriFragments = UriParser_Solution::getUriFragments();
             
        // Den Namen des gewünschten Controllers ermitteln 
        if (!empty($uriFragments[0])) {
            $controllerName = $uriFragments[0];
            $controllerName = ucfirst($controllerName); // Erstes Zeichen gross schreiben
            return $controllerName; // "Controller" anhängen
        }
        
        return 'Default';
    }
    
    /**
     * Diese Methode wertet die Request URI aus und gibt den Actionname (Action = Methode im Controller) zurück.
     */
    public static function getMethodName()
    {
        $uriFragments = UriParser_Solution::getUriFragments();
        
        // Den Namen der auszuführenden Methode ermitteln
        $method = 'index';
        if (!empty($uriFragments[1])) {
            $method = $uriFragments[1];
        }
        
        return $method;
    }
    
    private static function getUriFragments()
    {
        // Die URI wird aus dem $_SERVER Array ausgelesen und in ihre
        // Einzelteile zerlegt.
        // /user/index/foo --> ['user', 'index', 'foo']
        $uri = $_SERVER['REQUEST_URI'];
        $uri = strtok($uri, '?'); // Erstes ? und alles danach abschneiden
        $uri = trim($uri, '/'); // Alle / am Anfang und am Ende der URI abschneiden
        $uriFragments = explode('/', $uri); // In Einzelteile zerlegen
        
        return $uriFragments;
    }
}