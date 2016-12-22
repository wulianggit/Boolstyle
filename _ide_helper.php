<?php
/**
 * A helper file for Laravel 5, to provide autocomplete information to your IDE
 * Generated for Laravel 5.2.45 on 2016-12-15.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */

namespace {
    exit("This file should not be included, only analyzed by your IDE");

    class App extends \Illuminate\Support\Facades\App{
        
        /**
         * 
         *
         * @static 
         */
        public static function version(){
            return \Illuminate\Foundation\Application::version();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function bootstrapWith($bootstrappers){
            return \Illuminate\Foundation\Application::bootstrapWith($bootstrappers);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function afterLoadingEnvironment($callback){
            return \Illuminate\Foundation\Application::afterLoadingEnvironment($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function beforeBootstrapping($bootstrapper, $callback){
            return \Illuminate\Foundation\Application::beforeBootstrapping($bootstrapper, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function afterBootstrapping($bootstrapper, $callback){
            return \Illuminate\Foundation\Application::afterBootstrapping($bootstrapper, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasBeenBootstrapped(){
            return \Illuminate\Foundation\Application::hasBeenBootstrapped();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setBasePath($basePath){
            return \Illuminate\Foundation\Application::setBasePath($basePath);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function path(){
            return \Illuminate\Foundation\Application::path();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function basePath(){
            return \Illuminate\Foundation\Application::basePath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function bootstrapPath(){
            return \Illuminate\Foundation\Application::bootstrapPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function configPath(){
            return \Illuminate\Foundation\Application::configPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function databasePath(){
            return \Illuminate\Foundation\Application::databasePath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function useDatabasePath($path){
            return \Illuminate\Foundation\Application::useDatabasePath($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function langPath(){
            return \Illuminate\Foundation\Application::langPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function publicPath(){
            return \Illuminate\Foundation\Application::publicPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function storagePath(){
            return \Illuminate\Foundation\Application::storagePath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function useStoragePath($path){
            return \Illuminate\Foundation\Application::useStoragePath($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function environmentPath(){
            return \Illuminate\Foundation\Application::environmentPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function useEnvironmentPath($path){
            return \Illuminate\Foundation\Application::useEnvironmentPath($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function loadEnvironmentFrom($file){
            return \Illuminate\Foundation\Application::loadEnvironmentFrom($file);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function environmentFile(){
            return \Illuminate\Foundation\Application::environmentFile();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function environmentFilePath(){
            return \Illuminate\Foundation\Application::environmentFilePath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function environment(){
            return \Illuminate\Foundation\Application::environment();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isLocal(){
            return \Illuminate\Foundation\Application::isLocal();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function detectEnvironment($callback){
            return \Illuminate\Foundation\Application::detectEnvironment($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function runningInConsole(){
            return \Illuminate\Foundation\Application::runningInConsole();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function runningUnitTests(){
            return \Illuminate\Foundation\Application::runningUnitTests();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function registerConfiguredProviders(){
            return \Illuminate\Foundation\Application::registerConfiguredProviders();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function register($provider, $options = array(), $force = false){
            return \Illuminate\Foundation\Application::register($provider, $options, $force);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getProvider($provider){
            return \Illuminate\Foundation\Application::getProvider($provider);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function resolveProviderClass($provider){
            return \Illuminate\Foundation\Application::resolveProviderClass($provider);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function loadDeferredProviders(){
            return \Illuminate\Foundation\Application::loadDeferredProviders();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function loadDeferredProvider($service){
            return \Illuminate\Foundation\Application::loadDeferredProvider($service);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function registerDeferredProvider($provider, $service = null){
            return \Illuminate\Foundation\Application::registerDeferredProvider($provider, $service);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function make($abstract, $parameters = array()){
            return \Illuminate\Foundation\Application::make($abstract, $parameters);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function bound($abstract){
            return \Illuminate\Foundation\Application::bound($abstract);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isBooted(){
            return \Illuminate\Foundation\Application::isBooted();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function boot(){
            return \Illuminate\Foundation\Application::boot();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function booting($callback){
            return \Illuminate\Foundation\Application::booting($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function booted($callback){
            return \Illuminate\Foundation\Application::booted($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function handle($request, $type = 1, $catch = true){
            return \Illuminate\Foundation\Application::handle($request, $type, $catch);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function shouldSkipMiddleware(){
            return \Illuminate\Foundation\Application::shouldSkipMiddleware();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function configurationIsCached(){
            return \Illuminate\Foundation\Application::configurationIsCached();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCachedConfigPath(){
            return \Illuminate\Foundation\Application::getCachedConfigPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function routesAreCached(){
            return \Illuminate\Foundation\Application::routesAreCached();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCachedRoutesPath(){
            return \Illuminate\Foundation\Application::getCachedRoutesPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCachedCompilePath(){
            return \Illuminate\Foundation\Application::getCachedCompilePath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCachedServicesPath(){
            return \Illuminate\Foundation\Application::getCachedServicesPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isDownForMaintenance(){
            return \Illuminate\Foundation\Application::isDownForMaintenance();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function abort($code, $message = '', $headers = array()){
            return \Illuminate\Foundation\Application::abort($code, $message, $headers);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function terminating($callback){
            return \Illuminate\Foundation\Application::terminating($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function terminate(){
            return \Illuminate\Foundation\Application::terminate();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLoadedProviders(){
            return \Illuminate\Foundation\Application::getLoadedProviders();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDeferredServices(){
            return \Illuminate\Foundation\Application::getDeferredServices();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDeferredServices($services){
            return \Illuminate\Foundation\Application::setDeferredServices($services);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addDeferredServices($services){
            return \Illuminate\Foundation\Application::addDeferredServices($services);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isDeferredService($service){
            return \Illuminate\Foundation\Application::isDeferredService($service);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function configureMonologUsing($callback){
            return \Illuminate\Foundation\Application::configureMonologUsing($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasMonologConfigurator(){
            return \Illuminate\Foundation\Application::hasMonologConfigurator();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getMonologConfigurator(){
            return \Illuminate\Foundation\Application::getMonologConfigurator();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLocale(){
            return \Illuminate\Foundation\Application::getLocale();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setLocale($locale){
            return \Illuminate\Foundation\Application::setLocale($locale);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isLocale($locale){
            return \Illuminate\Foundation\Application::isLocale($locale);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function registerCoreContainerAliases(){
            return \Illuminate\Foundation\Application::registerCoreContainerAliases();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flush(){
            return \Illuminate\Foundation\Application::flush();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getNamespace(){
            return \Illuminate\Foundation\Application::getNamespace();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function when($concrete){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::when($concrete);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function resolved($abstract){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::resolved($abstract);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isAlias($name){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::isAlias($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function bind($abstract, $concrete = null, $shared = false){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::bind($abstract, $concrete, $shared);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addContextualBinding($concrete, $abstract, $implementation){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::addContextualBinding($concrete, $abstract, $implementation);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function bindIf($abstract, $concrete = null, $shared = false){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::bindIf($abstract, $concrete, $shared);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function singleton($abstract, $concrete = null){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::singleton($abstract, $concrete);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function share($closure){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::share($closure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function extend($abstract, $closure){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::extend($abstract, $closure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function instance($abstract, $instance){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::instance($abstract, $instance);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function tag($abstracts, $tags){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::tag($abstracts, $tags);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function tagged($tag){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::tagged($tag);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function alias($abstract, $alias){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::alias($abstract, $alias);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function rebinding($abstract, $callback){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::rebinding($abstract, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function refresh($abstract, $target, $method){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::refresh($abstract, $target, $method);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function wrap($callback, $parameters = array()){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::wrap($callback, $parameters);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function call($callback, $parameters = array(), $defaultMethod = null){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::call($callback, $parameters, $defaultMethod);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function build($concrete, $parameters = array()){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::build($concrete, $parameters);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function resolving($abstract, $callback = null){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::resolving($abstract, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function afterResolving($abstract, $callback = null){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::afterResolving($abstract, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isShared($abstract){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::isShared($abstract);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getBindings(){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::getBindings();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forgetInstance($abstract){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::forgetInstance($abstract);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forgetInstances(){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::forgetInstances();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getInstance(){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::getInstance();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setInstance($container){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::setInstance($container);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetExists($key){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::offsetExists($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetGet($key){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::offsetGet($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetSet($key, $value){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::offsetSet($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetUnset($key){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::offsetUnset($key);
        }
        
    }


    class Artisan extends \Illuminate\Support\Facades\Artisan{
        
        /**
         * 
         *
         * @static 
         */
        public static function handle($input, $output = null){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::handle($input, $output);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function terminate($input, $status){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::terminate($input, $status);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function registerCommand($command){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::registerCommand($command);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function call($command, $parameters = array()){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::call($command, $parameters);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function queue($command, $parameters = array()){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::queue($command, $parameters);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function all(){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::all();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function output(){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::output();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function bootstrap(){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::bootstrap();
        }
        
    }


    class Auth extends \Illuminate\Support\Facades\Auth{
        
        /**
         * 
         *
         * @static 
         */
        public static function guard($name = null){
            return \Illuminate\Auth\AuthManager::guard($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createSessionDriver($name, $config){
            return \Illuminate\Auth\AuthManager::createSessionDriver($name, $config);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createTokenDriver($name, $config){
            return \Illuminate\Auth\AuthManager::createTokenDriver($name, $config);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Auth\AuthManager::getDefaultDriver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function shouldUse($name){
            return \Illuminate\Auth\AuthManager::shouldUse($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDefaultDriver($name){
            return \Illuminate\Auth\AuthManager::setDefaultDriver($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function viaRequest($driver, $callback){
            return \Illuminate\Auth\AuthManager::viaRequest($driver, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function userResolver(){
            return \Illuminate\Auth\AuthManager::userResolver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function resolveUsersUsing($userResolver){
            return \Illuminate\Auth\AuthManager::resolveUsersUsing($userResolver);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function extend($driver, $callback){
            return \Illuminate\Auth\AuthManager::extend($driver, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function provider($name, $callback){
            return \Illuminate\Auth\AuthManager::provider($name, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createUserProvider($provider){
            return \Illuminate\Auth\AuthManager::createUserProvider($provider);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function user(){
            return \Illuminate\Auth\SessionGuard::user();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function id(){
            return \Illuminate\Auth\SessionGuard::id();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function once($credentials = array()){
            return \Illuminate\Auth\SessionGuard::once($credentials);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function validate($credentials = array()){
            return \Illuminate\Auth\SessionGuard::validate($credentials);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function basic($field = 'email', $extraConditions = array()){
            return \Illuminate\Auth\SessionGuard::basic($field, $extraConditions);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function onceBasic($field = 'email', $extraConditions = array()){
            return \Illuminate\Auth\SessionGuard::onceBasic($field, $extraConditions);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function attempt($credentials = array(), $remember = false, $login = true){
            return \Illuminate\Auth\SessionGuard::attempt($credentials, $remember, $login);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function attempting($callback){
            return \Illuminate\Auth\SessionGuard::attempting($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function login($user, $remember = false){
            return \Illuminate\Auth\SessionGuard::login($user, $remember);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function loginUsingId($id, $remember = false){
            return \Illuminate\Auth\SessionGuard::loginUsingId($id, $remember);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function onceUsingId($id){
            return \Illuminate\Auth\SessionGuard::onceUsingId($id);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function logout(){
            return \Illuminate\Auth\SessionGuard::logout();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCookieJar(){
            return \Illuminate\Auth\SessionGuard::getCookieJar();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setCookieJar($cookie){
            return \Illuminate\Auth\SessionGuard::setCookieJar($cookie);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDispatcher(){
            return \Illuminate\Auth\SessionGuard::getDispatcher();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDispatcher($events){
            return \Illuminate\Auth\SessionGuard::setDispatcher($events);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getSession(){
            return \Illuminate\Auth\SessionGuard::getSession();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getProvider(){
            return \Illuminate\Auth\SessionGuard::getProvider();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setProvider($provider){
            return \Illuminate\Auth\SessionGuard::setProvider($provider);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUser(){
            return \Illuminate\Auth\SessionGuard::getUser();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setUser($user){
            return \Illuminate\Auth\SessionGuard::setUser($user);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRequest(){
            return \Illuminate\Auth\SessionGuard::getRequest();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRequest($request){
            return \Illuminate\Auth\SessionGuard::setRequest($request);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLastAttempted(){
            return \Illuminate\Auth\SessionGuard::getLastAttempted();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getName(){
            return \Illuminate\Auth\SessionGuard::getName();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRecallerName(){
            return \Illuminate\Auth\SessionGuard::getRecallerName();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function viaRemember(){
            return \Illuminate\Auth\SessionGuard::viaRemember();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function authenticate(){
            return \Illuminate\Auth\SessionGuard::authenticate();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function check(){
            return \Illuminate\Auth\SessionGuard::check();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function guest(){
            return \Illuminate\Auth\SessionGuard::guest();
        }
        
    }


    class Blade extends \Illuminate\Support\Facades\Blade{
        
        /**
         * 
         *
         * @static 
         */
        public static function compile($path = null){
            return \Illuminate\View\Compilers\BladeCompiler::compile($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPath(){
            return \Illuminate\View\Compilers\BladeCompiler::getPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setPath($path){
            return \Illuminate\View\Compilers\BladeCompiler::setPath($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function compileString($value){
            return \Illuminate\View\Compilers\BladeCompiler::compileString($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function compileEchoDefaults($value){
            return \Illuminate\View\Compilers\BladeCompiler::compileEchoDefaults($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getExtensions(){
            return \Illuminate\View\Compilers\BladeCompiler::getExtensions();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function extend($compiler){
            return \Illuminate\View\Compilers\BladeCompiler::extend($compiler);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function directive($name, $handler){
            return \Illuminate\View\Compilers\BladeCompiler::directive($name, $handler);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCustomDirectives(){
            return \Illuminate\View\Compilers\BladeCompiler::getCustomDirectives();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRawTags(){
            return \Illuminate\View\Compilers\BladeCompiler::getRawTags();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRawTags($openTag, $closeTag){
            return \Illuminate\View\Compilers\BladeCompiler::setRawTags($openTag, $closeTag);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setContentTags($openTag, $closeTag, $escaped = false){
            return \Illuminate\View\Compilers\BladeCompiler::setContentTags($openTag, $closeTag, $escaped);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setEscapedContentTags($openTag, $closeTag){
            return \Illuminate\View\Compilers\BladeCompiler::setEscapedContentTags($openTag, $closeTag);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getContentTags(){
            return \Illuminate\View\Compilers\BladeCompiler::getContentTags();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getEscapedContentTags(){
            return \Illuminate\View\Compilers\BladeCompiler::getEscapedContentTags();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setEchoFormat($format){
            return \Illuminate\View\Compilers\BladeCompiler::setEchoFormat($format);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCompiledPath($path){
            //Method inherited from \Illuminate\View\Compilers\Compiler            
            return \Illuminate\View\Compilers\BladeCompiler::getCompiledPath($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isExpired($path){
            //Method inherited from \Illuminate\View\Compilers\Compiler            
            return \Illuminate\View\Compilers\BladeCompiler::isExpired($path);
        }
        
    }


    class Cache extends \Illuminate\Support\Facades\Cache{
        
        /**
         * 
         *
         * @static 
         */
        public static function store($name = null){
            return \Illuminate\Cache\CacheManager::store($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function driver($driver = null){
            return \Illuminate\Cache\CacheManager::driver($driver);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function repository($store){
            return \Illuminate\Cache\CacheManager::repository($store);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Cache\CacheManager::getDefaultDriver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDefaultDriver($name){
            return \Illuminate\Cache\CacheManager::setDefaultDriver($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function extend($driver, $callback){
            return \Illuminate\Cache\CacheManager::extend($driver, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setEventDispatcher($events){
            return \Illuminate\Cache\Repository::setEventDispatcher($events);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function has($key){
            return \Illuminate\Cache\Repository::has($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function get($key, $default = null){
            return \Illuminate\Cache\Repository::get($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function many($keys){
            return \Illuminate\Cache\Repository::many($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function pull($key, $default = null){
            return \Illuminate\Cache\Repository::pull($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function put($key, $value, $minutes = null){
            return \Illuminate\Cache\Repository::put($key, $value, $minutes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function putMany($values, $minutes){
            return \Illuminate\Cache\Repository::putMany($values, $minutes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function add($key, $value, $minutes){
            return \Illuminate\Cache\Repository::add($key, $value, $minutes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forever($key, $value){
            return \Illuminate\Cache\Repository::forever($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function remember($key, $minutes, $callback){
            return \Illuminate\Cache\Repository::remember($key, $minutes, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function sear($key, $callback){
            return \Illuminate\Cache\Repository::sear($key, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function rememberForever($key, $callback){
            return \Illuminate\Cache\Repository::rememberForever($key, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forget($key){
            return \Illuminate\Cache\Repository::forget($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function tags($names){
            return \Illuminate\Cache\Repository::tags($names);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDefaultCacheTime(){
            return \Illuminate\Cache\Repository::getDefaultCacheTime();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDefaultCacheTime($minutes){
            return \Illuminate\Cache\Repository::setDefaultCacheTime($minutes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getStore(){
            return \Illuminate\Cache\Repository::getStore();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetExists($key){
            return \Illuminate\Cache\Repository::offsetExists($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetGet($key){
            return \Illuminate\Cache\Repository::offsetGet($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetSet($key, $value){
            return \Illuminate\Cache\Repository::offsetSet($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetUnset($key){
            return \Illuminate\Cache\Repository::offsetUnset($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function macro($name, $macro){
            return \Illuminate\Cache\Repository::macro($name, $macro);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Cache\Repository::hasMacro($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function macroCall($method, $parameters){
            return \Illuminate\Cache\Repository::macroCall($method, $parameters);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function increment($key, $value = 1){
            return \Illuminate\Cache\RedisStore::increment($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function decrement($key, $value = 1){
            return \Illuminate\Cache\RedisStore::decrement($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flush(){
            return \Illuminate\Cache\RedisStore::flush();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function connection(){
            return \Illuminate\Cache\RedisStore::connection();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setConnection($connection){
            return \Illuminate\Cache\RedisStore::setConnection($connection);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRedis(){
            return \Illuminate\Cache\RedisStore::getRedis();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPrefix(){
            return \Illuminate\Cache\RedisStore::getPrefix();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setPrefix($prefix){
            return \Illuminate\Cache\RedisStore::setPrefix($prefix);
        }
        
    }


    class Config extends \Illuminate\Support\Facades\Config{
        
        /**
         * 
         *
         * @static 
         */
        public static function has($key){
            return \Illuminate\Config\Repository::has($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function get($key, $default = null){
            return \Illuminate\Config\Repository::get($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function set($key, $value = null){
            return \Illuminate\Config\Repository::set($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function prepend($key, $value){
            return \Illuminate\Config\Repository::prepend($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function push($key, $value){
            return \Illuminate\Config\Repository::push($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function all(){
            return \Illuminate\Config\Repository::all();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetExists($key){
            return \Illuminate\Config\Repository::offsetExists($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetGet($key){
            return \Illuminate\Config\Repository::offsetGet($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetSet($key, $value){
            return \Illuminate\Config\Repository::offsetSet($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetUnset($key){
            return \Illuminate\Config\Repository::offsetUnset($key);
        }
        
    }


    class Cookie extends \Illuminate\Support\Facades\Cookie{
        
        /**
         * 
         *
         * @static 
         */
        public static function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = false, $httpOnly = true){
            return \Illuminate\Cookie\CookieJar::make($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forever($name, $value, $path = null, $domain = null, $secure = false, $httpOnly = true){
            return \Illuminate\Cookie\CookieJar::forever($name, $value, $path, $domain, $secure, $httpOnly);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forget($name, $path = null, $domain = null){
            return \Illuminate\Cookie\CookieJar::forget($name, $path, $domain);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasQueued($key){
            return \Illuminate\Cookie\CookieJar::hasQueued($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function queued($key, $default = null){
            return \Illuminate\Cookie\CookieJar::queued($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function queue(){
            return \Illuminate\Cookie\CookieJar::queue();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function unqueue($name){
            return \Illuminate\Cookie\CookieJar::unqueue($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDefaultPathAndDomain($path, $domain, $secure = false){
            return \Illuminate\Cookie\CookieJar::setDefaultPathAndDomain($path, $domain, $secure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getQueuedCookies(){
            return \Illuminate\Cookie\CookieJar::getQueuedCookies();
        }
        
    }


    class Crypt extends \Illuminate\Support\Facades\Crypt{
        
        /**
         * 
         *
         * @static 
         */
        public static function supported($key, $cipher){
            return \Illuminate\Encryption\Encrypter::supported($key, $cipher);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function encrypt($value){
            return \Illuminate\Encryption\Encrypter::encrypt($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function decrypt($payload){
            return \Illuminate\Encryption\Encrypter::decrypt($payload);
        }
        
    }


    class DB extends \Illuminate\Support\Facades\DB{
        
        /**
         * 
         *
         * @static 
         */
        public static function connection($name = null){
            return \Illuminate\Database\DatabaseManager::connection($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function purge($name = null){
            return \Illuminate\Database\DatabaseManager::purge($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function disconnect($name = null){
            return \Illuminate\Database\DatabaseManager::disconnect($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function reconnect($name = null){
            return \Illuminate\Database\DatabaseManager::reconnect($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDefaultConnection(){
            return \Illuminate\Database\DatabaseManager::getDefaultConnection();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDefaultConnection($name){
            return \Illuminate\Database\DatabaseManager::setDefaultConnection($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function supportedDrivers(){
            return \Illuminate\Database\DatabaseManager::supportedDrivers();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function availableDrivers(){
            return \Illuminate\Database\DatabaseManager::availableDrivers();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function extend($name, $resolver){
            return \Illuminate\Database\DatabaseManager::extend($name, $resolver);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getConnections(){
            return \Illuminate\Database\DatabaseManager::getConnections();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getSchemaBuilder(){
            return \Illuminate\Database\MySqlConnection::getSchemaBuilder();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function useDefaultQueryGrammar(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::useDefaultQueryGrammar();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function useDefaultSchemaGrammar(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::useDefaultSchemaGrammar();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function useDefaultPostProcessor(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::useDefaultPostProcessor();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function table($table){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::table($table);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function query(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::query();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function raw($value){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::raw($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function selectOne($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::selectOne($query, $bindings);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function selectFromWriteConnection($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::selectFromWriteConnection($query, $bindings);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function select($query, $bindings = array(), $useReadPdo = true){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::select($query, $bindings, $useReadPdo);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function cursor($query, $bindings = array(), $useReadPdo = true){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::cursor($query, $bindings, $useReadPdo);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function insert($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::insert($query, $bindings);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function update($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::update($query, $bindings);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function delete($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::delete($query, $bindings);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function statement($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::statement($query, $bindings);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function affectingStatement($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::affectingStatement($query, $bindings);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function unprepared($query){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::unprepared($query);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function prepareBindings($bindings){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::prepareBindings($bindings);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function transaction($callback){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::transaction($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function beginTransaction(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::beginTransaction();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function commit(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::commit();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function rollBack(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::rollBack();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function transactionLevel(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::transactionLevel();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function pretend($callback){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::pretend($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function logQuery($query, $bindings, $time = null){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::logQuery($query, $bindings, $time);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function listen($callback){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::listen($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isDoctrineAvailable(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::isDoctrineAvailable();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDoctrineColumn($table, $column){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDoctrineColumn($table, $column);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDoctrineSchemaManager(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDoctrineSchemaManager();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDoctrineConnection(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDoctrineConnection();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPdo(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getPdo();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getReadPdo(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getReadPdo();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setPdo($pdo){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setPdo($pdo);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setReadPdo($pdo){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setReadPdo($pdo);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setReconnector($reconnector){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setReconnector($reconnector);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getName(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getName();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getConfig($option){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getConfig($option);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDriverName(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDriverName();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getQueryGrammar(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getQueryGrammar();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setQueryGrammar($grammar){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setQueryGrammar($grammar);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getSchemaGrammar(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getSchemaGrammar();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setSchemaGrammar($grammar){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setSchemaGrammar($grammar);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPostProcessor(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getPostProcessor();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setPostProcessor($processor){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setPostProcessor($processor);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getEventDispatcher(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getEventDispatcher();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setEventDispatcher($events){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setEventDispatcher($events);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function pretending(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::pretending();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getFetchMode(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getFetchMode();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getFetchArgument(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getFetchArgument();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getFetchConstructorArgument(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getFetchConstructorArgument();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setFetchMode($fetchMode, $fetchArgument = null, $fetchConstructorArgument = array()){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setFetchMode($fetchMode, $fetchArgument, $fetchConstructorArgument);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getQueryLog(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getQueryLog();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flushQueryLog(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::flushQueryLog();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function enableQueryLog(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::enableQueryLog();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function disableQueryLog(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::disableQueryLog();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function logging(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::logging();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDatabaseName(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDatabaseName();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDatabaseName($database){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setDatabaseName($database);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getTablePrefix(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getTablePrefix();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setTablePrefix($prefix){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setTablePrefix($prefix);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function withTablePrefix($grammar){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::withTablePrefix($grammar);
        }
        
    }


    class Eloquent extends \Illuminate\Database\Eloquent\Model{
        
        /**
         * 
         *
         * @static 
         */
        public static function withGlobalScope($identifier, $scope){
            return \Illuminate\Database\Eloquent\Builder::withGlobalScope($identifier, $scope);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function withoutGlobalScope($scope){
            return \Illuminate\Database\Eloquent\Builder::withoutGlobalScope($scope);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function withoutGlobalScopes($scopes = null){
            return \Illuminate\Database\Eloquent\Builder::withoutGlobalScopes($scopes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function removedScopes(){
            return \Illuminate\Database\Eloquent\Builder::removedScopes();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function find($id, $columns = array()){
            return \Illuminate\Database\Eloquent\Builder::find($id, $columns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function findMany($ids, $columns = array()){
            return \Illuminate\Database\Eloquent\Builder::findMany($ids, $columns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function findOrFail($id, $columns = array()){
            return \Illuminate\Database\Eloquent\Builder::findOrFail($id, $columns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function findOrNew($id, $columns = array()){
            return \Illuminate\Database\Eloquent\Builder::findOrNew($id, $columns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function firstOrNew($attributes){
            return \Illuminate\Database\Eloquent\Builder::firstOrNew($attributes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function firstOrCreate($attributes){
            return \Illuminate\Database\Eloquent\Builder::firstOrCreate($attributes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function updateOrCreate($attributes, $values = array()){
            return \Illuminate\Database\Eloquent\Builder::updateOrCreate($attributes, $values);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function first($columns = array()){
            return \Illuminate\Database\Eloquent\Builder::first($columns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function firstOrFail($columns = array()){
            return \Illuminate\Database\Eloquent\Builder::firstOrFail($columns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function get($columns = array()){
            return \Illuminate\Database\Eloquent\Builder::get($columns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function value($column){
            return \Illuminate\Database\Eloquent\Builder::value($column);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function cursor(){
            return \Illuminate\Database\Eloquent\Builder::cursor();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function chunk($count, $callback){
            return \Illuminate\Database\Eloquent\Builder::chunk($count, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function chunkById($count, $callback, $column = 'id'){
            return \Illuminate\Database\Eloquent\Builder::chunkById($count, $callback, $column);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function each($callback, $count = 1000){
            return \Illuminate\Database\Eloquent\Builder::each($callback, $count);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function pluck($column, $key = null){
            return \Illuminate\Database\Eloquent\Builder::pluck($column, $key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function lists($column, $key = null){
            return \Illuminate\Database\Eloquent\Builder::lists($column, $key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function paginate($perPage = null, $columns = array(), $pageName = 'page', $page = null){
            return \Illuminate\Database\Eloquent\Builder::paginate($perPage, $columns, $pageName, $page);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function simplePaginate($perPage = null, $columns = array(), $pageName = 'page', $page = null){
            return \Illuminate\Database\Eloquent\Builder::simplePaginate($perPage, $columns, $pageName, $page);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function onDelete($callback){
            return \Illuminate\Database\Eloquent\Builder::onDelete($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getModels($columns = array()){
            return \Illuminate\Database\Eloquent\Builder::getModels($columns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function eagerLoadRelations($models){
            return \Illuminate\Database\Eloquent\Builder::eagerLoadRelations($models);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function when($value, $callback){
            return \Illuminate\Database\Eloquent\Builder::when($value, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function where($column, $operator = null, $value = null, $boolean = 'and'){
            return \Illuminate\Database\Eloquent\Builder::where($column, $operator, $value, $boolean);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function orWhere($column, $operator = null, $value = null){
            return \Illuminate\Database\Eloquent\Builder::orWhere($column, $operator, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function has($relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null){
            return \Illuminate\Database\Eloquent\Builder::has($relation, $operator, $count, $boolean, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function doesntHave($relation, $boolean = 'and', $callback = null){
            return \Illuminate\Database\Eloquent\Builder::doesntHave($relation, $boolean, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function whereHas($relation, $callback, $operator = '>=', $count = 1){
            return \Illuminate\Database\Eloquent\Builder::whereHas($relation, $callback, $operator, $count);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function whereDoesntHave($relation, $callback = null){
            return \Illuminate\Database\Eloquent\Builder::whereDoesntHave($relation, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function orHas($relation, $operator = '>=', $count = 1){
            return \Illuminate\Database\Eloquent\Builder::orHas($relation, $operator, $count);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function orWhereHas($relation, $callback, $operator = '>=', $count = 1){
            return \Illuminate\Database\Eloquent\Builder::orWhereHas($relation, $callback, $operator, $count);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function mergeModelDefinedRelationConstraints($relation){
            return \Illuminate\Database\Eloquent\Builder::mergeModelDefinedRelationConstraints($relation);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function without($relations){
            return \Illuminate\Database\Eloquent\Builder::without($relations);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function withCount($relations){
            return \Illuminate\Database\Eloquent\Builder::withCount($relations);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function scopes($scopes){
            return \Illuminate\Database\Eloquent\Builder::scopes($scopes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function applyScopes(){
            return \Illuminate\Database\Eloquent\Builder::applyScopes();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getQuery(){
            return \Illuminate\Database\Eloquent\Builder::getQuery();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function toBase(){
            return \Illuminate\Database\Eloquent\Builder::toBase();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setQuery($query){
            return \Illuminate\Database\Eloquent\Builder::setQuery($query);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getEagerLoads(){
            return \Illuminate\Database\Eloquent\Builder::getEagerLoads();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setEagerLoads($eagerLoad){
            return \Illuminate\Database\Eloquent\Builder::setEagerLoads($eagerLoad);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getModel(){
            return \Illuminate\Database\Eloquent\Builder::getModel();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setModel($model){
            return \Illuminate\Database\Eloquent\Builder::setModel($model);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function macro($name, $callback){
            return \Illuminate\Database\Eloquent\Builder::macro($name, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getMacro($name){
            return \Illuminate\Database\Eloquent\Builder::getMacro($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function select($columns = array()){
            return \Illuminate\Database\Query\Builder::select($columns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function selectRaw($expression, $bindings = array()){
            return \Illuminate\Database\Query\Builder::selectRaw($expression, $bindings);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function selectSub($query, $as){
            return \Illuminate\Database\Query\Builder::selectSub($query, $as);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addSelect($column){
            return \Illuminate\Database\Query\Builder::addSelect($column);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function distinct(){
            return \Illuminate\Database\Query\Builder::distinct();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function from($table){
            return \Illuminate\Database\Query\Builder::from($table);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function join($table, $one, $operator = null, $two = null, $type = 'inner', $where = false){
            return \Illuminate\Database\Query\Builder::join($table, $one, $operator, $two, $type, $where);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function joinWhere($table, $one, $operator, $two, $type = 'inner'){
            return \Illuminate\Database\Query\Builder::joinWhere($table, $one, $operator, $two, $type);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function leftJoin($table, $first, $operator = null, $second = null){
            return \Illuminate\Database\Query\Builder::leftJoin($table, $first, $operator, $second);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function leftJoinWhere($table, $one, $operator, $two){
            return \Illuminate\Database\Query\Builder::leftJoinWhere($table, $one, $operator, $two);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function rightJoin($table, $first, $operator = null, $second = null){
            return \Illuminate\Database\Query\Builder::rightJoin($table, $first, $operator, $second);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function rightJoinWhere($table, $one, $operator, $two){
            return \Illuminate\Database\Query\Builder::rightJoinWhere($table, $one, $operator, $two);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function crossJoin($table, $first = null, $operator = null, $second = null){
            return \Illuminate\Database\Query\Builder::crossJoin($table, $first, $operator, $second);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function whereColumn($first, $operator = null, $second = null, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereColumn($first, $operator, $second, $boolean);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function orWhereColumn($first, $operator = null, $second = null){
            return \Illuminate\Database\Query\Builder::orWhereColumn($first, $operator, $second);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function whereRaw($sql, $bindings = array(), $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereRaw($sql, $bindings, $boolean);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function orWhereRaw($sql, $bindings = array()){
            return \Illuminate\Database\Query\Builder::orWhereRaw($sql, $bindings);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function whereBetween($column, $values, $boolean = 'and', $not = false){
            return \Illuminate\Database\Query\Builder::whereBetween($column, $values, $boolean, $not);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function orWhereBetween($column, $values){
            return \Illuminate\Database\Query\Builder::orWhereBetween($column, $values);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function whereNotBetween($column, $values, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereNotBetween($column, $values, $boolean);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function orWhereNotBetween($column, $values){
            return \Illuminate\Database\Query\Builder::orWhereNotBetween($column, $values);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function whereNested($callback, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereNested($callback, $boolean);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forNestedWhere(){
            return \Illuminate\Database\Query\Builder::forNestedWhere();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addNestedWhereQuery($query, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::addNestedWhereQuery($query, $boolean);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function whereExists($callback, $boolean = 'and', $not = false){
            return \Illuminate\Database\Query\Builder::whereExists($callback, $boolean, $not);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function orWhereExists($callback, $not = false){
            return \Illuminate\Database\Query\Builder::orWhereExists($callback, $not);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function whereNotExists($callback, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereNotExists($callback, $boolean);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function orWhereNotExists($callback){
            return \Illuminate\Database\Query\Builder::orWhereNotExists($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addWhereExistsQuery($query, $boolean = 'and', $not = false){
            return \Illuminate\Database\Query\Builder::addWhereExistsQuery($query, $boolean, $not);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function whereIn($column, $values, $boolean = 'and', $not = false){
            return \Illuminate\Database\Query\Builder::whereIn($column, $values, $boolean, $not);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function orWhereIn($column, $values){
            return \Illuminate\Database\Query\Builder::orWhereIn($column, $values);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function whereNotIn($column, $values, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereNotIn($column, $values, $boolean);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function orWhereNotIn($column, $values){
            return \Illuminate\Database\Query\Builder::orWhereNotIn($column, $values);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function whereNull($column, $boolean = 'and', $not = false){
            return \Illuminate\Database\Query\Builder::whereNull($column, $boolean, $not);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function orWhereNull($column){
            return \Illuminate\Database\Query\Builder::orWhereNull($column);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function whereNotNull($column, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereNotNull($column, $boolean);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function orWhereNotNull($column){
            return \Illuminate\Database\Query\Builder::orWhereNotNull($column);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function whereDate($column, $operator, $value, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereDate($column, $operator, $value, $boolean);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function orWhereDate($column, $operator, $value){
            return \Illuminate\Database\Query\Builder::orWhereDate($column, $operator, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function whereTime($column, $operator, $value, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereTime($column, $operator, $value, $boolean);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function orWhereTime($column, $operator, $value){
            return \Illuminate\Database\Query\Builder::orWhereTime($column, $operator, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function whereDay($column, $operator, $value, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereDay($column, $operator, $value, $boolean);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function whereMonth($column, $operator, $value, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereMonth($column, $operator, $value, $boolean);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function whereYear($column, $operator, $value, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereYear($column, $operator, $value, $boolean);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function dynamicWhere($method, $parameters){
            return \Illuminate\Database\Query\Builder::dynamicWhere($method, $parameters);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function groupBy(){
            return \Illuminate\Database\Query\Builder::groupBy();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function having($column, $operator = null, $value = null, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::having($column, $operator, $value, $boolean);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function orHaving($column, $operator = null, $value = null){
            return \Illuminate\Database\Query\Builder::orHaving($column, $operator, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function havingRaw($sql, $bindings = array(), $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::havingRaw($sql, $bindings, $boolean);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function orHavingRaw($sql, $bindings = array()){
            return \Illuminate\Database\Query\Builder::orHavingRaw($sql, $bindings);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function orderBy($column, $direction = 'asc'){
            return \Illuminate\Database\Query\Builder::orderBy($column, $direction);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function latest($column = 'created_at'){
            return \Illuminate\Database\Query\Builder::latest($column);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function oldest($column = 'created_at'){
            return \Illuminate\Database\Query\Builder::oldest($column);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function inRandomOrder($seed = ''){
            return \Illuminate\Database\Query\Builder::inRandomOrder($seed);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function orderByRaw($sql, $bindings = array()){
            return \Illuminate\Database\Query\Builder::orderByRaw($sql, $bindings);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offset($value){
            return \Illuminate\Database\Query\Builder::offset($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function skip($value){
            return \Illuminate\Database\Query\Builder::skip($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function limit($value){
            return \Illuminate\Database\Query\Builder::limit($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function take($value){
            return \Illuminate\Database\Query\Builder::take($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forPage($page, $perPage = 15){
            return \Illuminate\Database\Query\Builder::forPage($page, $perPage);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forPageAfterId($perPage = 15, $lastId = 0, $column = 'id'){
            return \Illuminate\Database\Query\Builder::forPageAfterId($perPage, $lastId, $column);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function union($query, $all = false){
            return \Illuminate\Database\Query\Builder::union($query, $all);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function unionAll($query){
            return \Illuminate\Database\Query\Builder::unionAll($query);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function lock($value = true){
            return \Illuminate\Database\Query\Builder::lock($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function lockForUpdate(){
            return \Illuminate\Database\Query\Builder::lockForUpdate();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function sharedLock(){
            return \Illuminate\Database\Query\Builder::sharedLock();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function toSql(){
            return \Illuminate\Database\Query\Builder::toSql();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCountForPagination($columns = array()){
            return \Illuminate\Database\Query\Builder::getCountForPagination($columns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function implode($column, $glue = ''){
            return \Illuminate\Database\Query\Builder::implode($column, $glue);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function exists(){
            return \Illuminate\Database\Query\Builder::exists();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function count($columns = '*'){
            return \Illuminate\Database\Query\Builder::count($columns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function min($column){
            return \Illuminate\Database\Query\Builder::min($column);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function max($column){
            return \Illuminate\Database\Query\Builder::max($column);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function sum($column){
            return \Illuminate\Database\Query\Builder::sum($column);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function avg($column){
            return \Illuminate\Database\Query\Builder::avg($column);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function average($column){
            return \Illuminate\Database\Query\Builder::average($column);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function aggregate($function, $columns = array()){
            return \Illuminate\Database\Query\Builder::aggregate($function, $columns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function numericAggregate($function, $columns = array()){
            return \Illuminate\Database\Query\Builder::numericAggregate($function, $columns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function insert($values){
            return \Illuminate\Database\Query\Builder::insert($values);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function insertGetId($values, $sequence = null){
            return \Illuminate\Database\Query\Builder::insertGetId($values, $sequence);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function updateOrInsert($attributes, $values = array()){
            return \Illuminate\Database\Query\Builder::updateOrInsert($attributes, $values);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function truncate(){
            return \Illuminate\Database\Query\Builder::truncate();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function mergeWheres($wheres, $bindings){
            return \Illuminate\Database\Query\Builder::mergeWheres($wheres, $bindings);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function raw($value){
            return \Illuminate\Database\Query\Builder::raw($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getBindings(){
            return \Illuminate\Database\Query\Builder::getBindings();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRawBindings(){
            return \Illuminate\Database\Query\Builder::getRawBindings();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setBindings($bindings, $type = 'where'){
            return \Illuminate\Database\Query\Builder::setBindings($bindings, $type);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addBinding($value, $type = 'where'){
            return \Illuminate\Database\Query\Builder::addBinding($value, $type);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function mergeBindings($query){
            return \Illuminate\Database\Query\Builder::mergeBindings($query);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getProcessor(){
            return \Illuminate\Database\Query\Builder::getProcessor();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getGrammar(){
            return \Illuminate\Database\Query\Builder::getGrammar();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function useWritePdo(){
            return \Illuminate\Database\Query\Builder::useWritePdo();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Database\Query\Builder::hasMacro($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function macroCall($method, $parameters){
            return \Illuminate\Database\Query\Builder::macroCall($method, $parameters);
        }
        
    }


    class Event extends \Illuminate\Support\Facades\Event{
        
        /**
         * 
         *
         * @static 
         */
        public static function listen($events, $listener, $priority = 0){
            return \Illuminate\Events\Dispatcher::listen($events, $listener, $priority);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasListeners($eventName){
            return \Illuminate\Events\Dispatcher::hasListeners($eventName);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function push($event, $payload = array()){
            return \Illuminate\Events\Dispatcher::push($event, $payload);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function subscribe($subscriber){
            return \Illuminate\Events\Dispatcher::subscribe($subscriber);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function until($event, $payload = array()){
            return \Illuminate\Events\Dispatcher::until($event, $payload);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flush($event){
            return \Illuminate\Events\Dispatcher::flush($event);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function firing(){
            return \Illuminate\Events\Dispatcher::firing();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function fire($event, $payload = array(), $halt = false){
            return \Illuminate\Events\Dispatcher::fire($event, $payload, $halt);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getListeners($eventName){
            return \Illuminate\Events\Dispatcher::getListeners($eventName);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function makeListener($listener){
            return \Illuminate\Events\Dispatcher::makeListener($listener);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createClassListener($listener){
            return \Illuminate\Events\Dispatcher::createClassListener($listener);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forget($event){
            return \Illuminate\Events\Dispatcher::forget($event);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forgetPushed(){
            return \Illuminate\Events\Dispatcher::forgetPushed();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setQueueResolver($resolver){
            return \Illuminate\Events\Dispatcher::setQueueResolver($resolver);
        }
        
    }


    class File extends \Illuminate\Support\Facades\File{
        
        /**
         * 
         *
         * @static 
         */
        public static function exists($path){
            return \Illuminate\Filesystem\Filesystem::exists($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function get($path, $lock = false){
            return \Illuminate\Filesystem\Filesystem::get($path, $lock);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function sharedGet($path){
            return \Illuminate\Filesystem\Filesystem::sharedGet($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRequire($path){
            return \Illuminate\Filesystem\Filesystem::getRequire($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function requireOnce($file){
            return \Illuminate\Filesystem\Filesystem::requireOnce($file);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function put($path, $contents, $lock = false){
            return \Illuminate\Filesystem\Filesystem::put($path, $contents, $lock);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function prepend($path, $data){
            return \Illuminate\Filesystem\Filesystem::prepend($path, $data);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function append($path, $data){
            return \Illuminate\Filesystem\Filesystem::append($path, $data);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function delete($paths){
            return \Illuminate\Filesystem\Filesystem::delete($paths);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function move($path, $target){
            return \Illuminate\Filesystem\Filesystem::move($path, $target);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function copy($path, $target){
            return \Illuminate\Filesystem\Filesystem::copy($path, $target);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function name($path){
            return \Illuminate\Filesystem\Filesystem::name($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function basename($path){
            return \Illuminate\Filesystem\Filesystem::basename($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function dirname($path){
            return \Illuminate\Filesystem\Filesystem::dirname($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function extension($path){
            return \Illuminate\Filesystem\Filesystem::extension($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function type($path){
            return \Illuminate\Filesystem\Filesystem::type($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function mimeType($path){
            return \Illuminate\Filesystem\Filesystem::mimeType($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function size($path){
            return \Illuminate\Filesystem\Filesystem::size($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function lastModified($path){
            return \Illuminate\Filesystem\Filesystem::lastModified($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isDirectory($directory){
            return \Illuminate\Filesystem\Filesystem::isDirectory($directory);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isWritable($path){
            return \Illuminate\Filesystem\Filesystem::isWritable($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isFile($file){
            return \Illuminate\Filesystem\Filesystem::isFile($file);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function glob($pattern, $flags = 0){
            return \Illuminate\Filesystem\Filesystem::glob($pattern, $flags);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function files($directory){
            return \Illuminate\Filesystem\Filesystem::files($directory);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function allFiles($directory, $hidden = false){
            return \Illuminate\Filesystem\Filesystem::allFiles($directory, $hidden);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function directories($directory){
            return \Illuminate\Filesystem\Filesystem::directories($directory);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function makeDirectory($path, $mode = 493, $recursive = false, $force = false){
            return \Illuminate\Filesystem\Filesystem::makeDirectory($path, $mode, $recursive, $force);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function moveDirectory($from, $to, $overwrite = false){
            return \Illuminate\Filesystem\Filesystem::moveDirectory($from, $to, $overwrite);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function copyDirectory($directory, $destination, $options = null){
            return \Illuminate\Filesystem\Filesystem::copyDirectory($directory, $destination, $options);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function deleteDirectory($directory, $preserve = false){
            return \Illuminate\Filesystem\Filesystem::deleteDirectory($directory, $preserve);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function cleanDirectory($directory){
            return \Illuminate\Filesystem\Filesystem::cleanDirectory($directory);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function macro($name, $macro){
            return \Illuminate\Filesystem\Filesystem::macro($name, $macro);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Filesystem\Filesystem::hasMacro($name);
        }
        
    }


    class Gate extends \Illuminate\Support\Facades\Gate{
        
        /**
         * 
         *
         * @static 
         */
        public static function has($ability){
            return \Illuminate\Auth\Access\Gate::has($ability);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function define($ability, $callback){
            return \Illuminate\Auth\Access\Gate::define($ability, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function policy($class, $policy){
            return \Illuminate\Auth\Access\Gate::policy($class, $policy);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function before($callback){
            return \Illuminate\Auth\Access\Gate::before($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function after($callback){
            return \Illuminate\Auth\Access\Gate::after($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function allows($ability, $arguments = array()){
            return \Illuminate\Auth\Access\Gate::allows($ability, $arguments);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function denies($ability, $arguments = array()){
            return \Illuminate\Auth\Access\Gate::denies($ability, $arguments);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function check($ability, $arguments = array()){
            return \Illuminate\Auth\Access\Gate::check($ability, $arguments);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function authorize($ability, $arguments = array()){
            return \Illuminate\Auth\Access\Gate::authorize($ability, $arguments);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPolicyFor($class){
            return \Illuminate\Auth\Access\Gate::getPolicyFor($class);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function resolvePolicy($class){
            return \Illuminate\Auth\Access\Gate::resolvePolicy($class);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forUser($user){
            return \Illuminate\Auth\Access\Gate::forUser($user);
        }
        
    }


    class Hash extends \Illuminate\Support\Facades\Hash{
        
        /**
         * 
         *
         * @static 
         */
        public static function make($value, $options = array()){
            return \Illuminate\Hashing\BcryptHasher::make($value, $options);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function check($value, $hashedValue, $options = array()){
            return \Illuminate\Hashing\BcryptHasher::check($value, $hashedValue, $options);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function needsRehash($hashedValue, $options = array()){
            return \Illuminate\Hashing\BcryptHasher::needsRehash($hashedValue, $options);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRounds($rounds){
            return \Illuminate\Hashing\BcryptHasher::setRounds($rounds);
        }
        
    }


    class Lang extends \Illuminate\Support\Facades\Lang{
        
        /**
         * 
         *
         * @static 
         */
        public static function hasForLocale($key, $locale = null){
            return \Illuminate\Translation\Translator::hasForLocale($key, $locale);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function has($key, $locale = null, $fallback = true){
            return \Illuminate\Translation\Translator::has($key, $locale, $fallback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function get($key, $replace = array(), $locale = null, $fallback = true){
            return \Illuminate\Translation\Translator::get($key, $replace, $locale, $fallback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function choice($key, $number, $replace = array(), $locale = null){
            return \Illuminate\Translation\Translator::choice($key, $number, $replace, $locale);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function trans($id, $parameters = array(), $domain = 'messages', $locale = null){
            return \Illuminate\Translation\Translator::trans($id, $parameters, $domain, $locale);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function transChoice($id, $number, $parameters = array(), $domain = 'messages', $locale = null){
            return \Illuminate\Translation\Translator::transChoice($id, $number, $parameters, $domain, $locale);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function load($namespace, $group, $locale){
            return \Illuminate\Translation\Translator::load($namespace, $group, $locale);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addNamespace($namespace, $hint){
            return \Illuminate\Translation\Translator::addNamespace($namespace, $hint);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function parseKey($key){
            return \Illuminate\Translation\Translator::parseKey($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getSelector(){
            return \Illuminate\Translation\Translator::getSelector();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setSelector($selector){
            return \Illuminate\Translation\Translator::setSelector($selector);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLoader(){
            return \Illuminate\Translation\Translator::getLoader();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function locale(){
            return \Illuminate\Translation\Translator::locale();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLocale(){
            return \Illuminate\Translation\Translator::getLocale();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setLocale($locale){
            return \Illuminate\Translation\Translator::setLocale($locale);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getFallback(){
            return \Illuminate\Translation\Translator::getFallback();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setFallback($fallback){
            return \Illuminate\Translation\Translator::setFallback($fallback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setParsedKey($key, $parsed){
            //Method inherited from \Illuminate\Support\NamespacedItemResolver            
            return \Illuminate\Translation\Translator::setParsedKey($key, $parsed);
        }
        
    }


    class Log extends \Illuminate\Support\Facades\Log{
        
        /**
         * 
         *
         * @static 
         */
        public static function debug($message, $context = array()){
            return \Monolog\Logger::debug($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function info($message, $context = array()){
            return \Monolog\Logger::info($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function notice($message, $context = array()){
            return \Monolog\Logger::notice($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function warning($message, $context = array()){
            return \Monolog\Logger::warning($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function error($message, $context = array()){
            return \Monolog\Logger::error($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function critical($message, $context = array()){
            return \Monolog\Logger::critical($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function alert($message, $context = array()){
            return \Monolog\Logger::alert($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function emergency($message, $context = array()){
            return \Monolog\Logger::emergency($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function log($level, $message, $context = array()){
            return \Illuminate\Log\Writer::log($level, $message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function write($level, $message, $context = array()){
            return \Illuminate\Log\Writer::write($level, $message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function useFiles($path, $level = 'debug'){
            return \Illuminate\Log\Writer::useFiles($path, $level);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function useDailyFiles($path, $days = 0, $level = 'debug'){
            return \Illuminate\Log\Writer::useDailyFiles($path, $days, $level);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function useSyslog($name = 'laravel', $level = 'debug'){
            return \Illuminate\Log\Writer::useSyslog($name, $level);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function useErrorLog($level = 'debug', $messageType = 0){
            return \Illuminate\Log\Writer::useErrorLog($level, $messageType);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function listen($callback){
            return \Illuminate\Log\Writer::listen($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getMonolog(){
            return \Illuminate\Log\Writer::getMonolog();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getEventDispatcher(){
            return \Illuminate\Log\Writer::getEventDispatcher();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setEventDispatcher($dispatcher){
            return \Illuminate\Log\Writer::setEventDispatcher($dispatcher);
        }
        
    }


    class Mail extends \Illuminate\Support\Facades\Mail{
        
        /**
         * 
         *
         * @static 
         */
        public static function alwaysFrom($address, $name = null){
            return \Illuminate\Mail\Mailer::alwaysFrom($address, $name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function alwaysTo($address, $name = null){
            return \Illuminate\Mail\Mailer::alwaysTo($address, $name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function raw($text, $callback){
            return \Illuminate\Mail\Mailer::raw($text, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function plain($view, $data, $callback){
            return \Illuminate\Mail\Mailer::plain($view, $data, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function send($view, $data, $callback){
            return \Illuminate\Mail\Mailer::send($view, $data, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function queue($view, $data, $callback, $queue = null){
            return \Illuminate\Mail\Mailer::queue($view, $data, $callback, $queue);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function onQueue($queue, $view, $data, $callback){
            return \Illuminate\Mail\Mailer::onQueue($queue, $view, $data, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function queueOn($queue, $view, $data, $callback){
            return \Illuminate\Mail\Mailer::queueOn($queue, $view, $data, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function later($delay, $view, $data, $callback, $queue = null){
            return \Illuminate\Mail\Mailer::later($delay, $view, $data, $callback, $queue);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function laterOn($queue, $delay, $view, $data, $callback){
            return \Illuminate\Mail\Mailer::laterOn($queue, $delay, $view, $data, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function handleQueuedMessage($job, $data){
            return \Illuminate\Mail\Mailer::handleQueuedMessage($job, $data);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getViewFactory(){
            return \Illuminate\Mail\Mailer::getViewFactory();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getSwiftMailer(){
            return \Illuminate\Mail\Mailer::getSwiftMailer();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function failures(){
            return \Illuminate\Mail\Mailer::failures();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setSwiftMailer($swift){
            return \Illuminate\Mail\Mailer::setSwiftMailer($swift);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setQueue($queue){
            return \Illuminate\Mail\Mailer::setQueue($queue);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setContainer($container){
            return \Illuminate\Mail\Mailer::setContainer($container);
        }
        
    }


    class Password extends \Illuminate\Support\Facades\Password{
        
        /**
         * 
         *
         * @static 
         */
        public static function broker($name = null){
            return \Illuminate\Auth\Passwords\PasswordBrokerManager::broker($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Auth\Passwords\PasswordBrokerManager::getDefaultDriver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDefaultDriver($name){
            return \Illuminate\Auth\Passwords\PasswordBrokerManager::setDefaultDriver($name);
        }
        
    }


    class Queue extends \Illuminate\Support\Facades\Queue{
        
        /**
         * 
         *
         * @static 
         */
        public static function before($callback){
            return \Illuminate\Queue\QueueManager::before($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function after($callback){
            return \Illuminate\Queue\QueueManager::after($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function exceptionOccurred($callback){
            return \Illuminate\Queue\QueueManager::exceptionOccurred($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function looping($callback){
            return \Illuminate\Queue\QueueManager::looping($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function failing($callback){
            return \Illuminate\Queue\QueueManager::failing($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function stopping($callback){
            return \Illuminate\Queue\QueueManager::stopping($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function connected($name = null){
            return \Illuminate\Queue\QueueManager::connected($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function connection($name = null){
            return \Illuminate\Queue\QueueManager::connection($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function extend($driver, $resolver){
            return \Illuminate\Queue\QueueManager::extend($driver, $resolver);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addConnector($driver, $resolver){
            return \Illuminate\Queue\QueueManager::addConnector($driver, $resolver);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Queue\QueueManager::getDefaultDriver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDefaultDriver($name){
            return \Illuminate\Queue\QueueManager::setDefaultDriver($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getName($connection = null){
            return \Illuminate\Queue\QueueManager::getName($connection);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isDownForMaintenance(){
            return \Illuminate\Queue\QueueManager::isDownForMaintenance();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function push($job, $data = '', $queue = null){
            return \Illuminate\Queue\SyncQueue::push($job, $data, $queue);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function pushRaw($payload, $queue = null, $options = array()){
            return \Illuminate\Queue\SyncQueue::pushRaw($payload, $queue, $options);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function later($delay, $job, $data = '', $queue = null){
            return \Illuminate\Queue\SyncQueue::later($delay, $job, $data, $queue);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function pop($queue = null){
            return \Illuminate\Queue\SyncQueue::pop($queue);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function pushOn($queue, $job, $data = ''){
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::pushOn($queue, $job, $data);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function laterOn($queue, $delay, $job, $data = ''){
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::laterOn($queue, $delay, $job, $data);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function bulk($jobs, $data = '', $queue = null){
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::bulk($jobs, $data, $queue);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setContainer($container){
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::setContainer($container);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setEncrypter($encrypter){
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::setEncrypter($encrypter);
        }
        
    }


    class Redirect extends \Illuminate\Support\Facades\Redirect{
        
        /**
         * 
         *
         * @static 
         */
        public static function home($status = 302){
            return \Illuminate\Routing\Redirector::home($status);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function back($status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::back($status, $headers);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function refresh($status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::refresh($status, $headers);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function guest($path, $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\Redirector::guest($path, $status, $headers, $secure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function intended($default = '/', $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\Redirector::intended($default, $status, $headers, $secure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function to($path, $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\Redirector::to($path, $status, $headers, $secure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function away($path, $status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::away($path, $status, $headers);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function secure($path, $status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::secure($path, $status, $headers);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function route($route, $parameters = array(), $status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::route($route, $parameters, $status, $headers);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function action($action, $parameters = array(), $status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::action($action, $parameters, $status, $headers);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUrlGenerator(){
            return \Illuminate\Routing\Redirector::getUrlGenerator();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setSession($session){
            return \Illuminate\Routing\Redirector::setSession($session);
        }
        
    }


    class Redis extends \Illuminate\Support\Facades\Redis{
        
        /**
         * 
         *
         * @static 
         */
        public static function connection($name = 'default'){
            return \Illuminate\Redis\Database::connection($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function command($method, $parameters = array()){
            return \Illuminate\Redis\Database::command($method, $parameters);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function subscribe($channels, $callback, $connection = null, $method = 'subscribe'){
            return \Illuminate\Redis\Database::subscribe($channels, $callback, $connection, $method);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function psubscribe($channels, $callback, $connection = null){
            return \Illuminate\Redis\Database::psubscribe($channels, $callback, $connection);
        }
        
    }


    class Request extends \Illuminate\Support\Facades\Request{
        
        /**
         * 
         *
         * @static 
         */
        public static function capture(){
            return \Illuminate\Http\Request::capture();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function instance(){
            return \Illuminate\Http\Request::instance();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function method(){
            return \Illuminate\Http\Request::method();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function root(){
            return \Illuminate\Http\Request::root();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function url(){
            return \Illuminate\Http\Request::url();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function fullUrl(){
            return \Illuminate\Http\Request::fullUrl();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function fullUrlWithQuery($query){
            return \Illuminate\Http\Request::fullUrlWithQuery($query);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function path(){
            return \Illuminate\Http\Request::path();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function decodedPath(){
            return \Illuminate\Http\Request::decodedPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function segment($index, $default = null){
            return \Illuminate\Http\Request::segment($index, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function segments(){
            return \Illuminate\Http\Request::segments();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function is(){
            return \Illuminate\Http\Request::is();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function fullUrlIs(){
            return \Illuminate\Http\Request::fullUrlIs();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function ajax(){
            return \Illuminate\Http\Request::ajax();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function pjax(){
            return \Illuminate\Http\Request::pjax();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function secure(){
            return \Illuminate\Http\Request::secure();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function ip(){
            return \Illuminate\Http\Request::ip();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function ips(){
            return \Illuminate\Http\Request::ips();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function exists($key){
            return \Illuminate\Http\Request::exists($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function has($key){
            return \Illuminate\Http\Request::has($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function all(){
            return \Illuminate\Http\Request::all();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function input($key = null, $default = null){
            return \Illuminate\Http\Request::input($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function only($keys){
            return \Illuminate\Http\Request::only($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function except($keys){
            return \Illuminate\Http\Request::except($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function intersect($keys){
            return \Illuminate\Http\Request::intersect($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function query($key = null, $default = null){
            return \Illuminate\Http\Request::query($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasCookie($key){
            return \Illuminate\Http\Request::hasCookie($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function cookie($key = null, $default = null){
            return \Illuminate\Http\Request::cookie($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function allFiles(){
            return \Illuminate\Http\Request::allFiles();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function file($key = null, $default = null){
            return \Illuminate\Http\Request::file($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasFile($key){
            return \Illuminate\Http\Request::hasFile($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasHeader($key){
            return \Illuminate\Http\Request::hasHeader($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function header($key = null, $default = null){
            return \Illuminate\Http\Request::header($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function server($key = null, $default = null){
            return \Illuminate\Http\Request::server($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function old($key = null, $default = null){
            return \Illuminate\Http\Request::old($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flash($filter = null, $keys = array()){
            return \Illuminate\Http\Request::flash($filter, $keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flashOnly($keys){
            return \Illuminate\Http\Request::flashOnly($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flashExcept($keys){
            return \Illuminate\Http\Request::flashExcept($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flush(){
            return \Illuminate\Http\Request::flush();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function merge($input){
            return \Illuminate\Http\Request::merge($input);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function replace($input){
            return \Illuminate\Http\Request::replace($input);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function json($key = null, $default = null){
            return \Illuminate\Http\Request::json($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function matchesType($actual, $type){
            return \Illuminate\Http\Request::matchesType($actual, $type);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isJson(){
            return \Illuminate\Http\Request::isJson();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function wantsJson(){
            return \Illuminate\Http\Request::wantsJson();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function accepts($contentTypes){
            return \Illuminate\Http\Request::accepts($contentTypes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function prefers($contentTypes){
            return \Illuminate\Http\Request::prefers($contentTypes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function acceptsJson(){
            return \Illuminate\Http\Request::acceptsJson();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function acceptsHtml(){
            return \Illuminate\Http\Request::acceptsHtml();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function format($default = 'html'){
            return \Illuminate\Http\Request::format($default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function bearerToken(){
            return \Illuminate\Http\Request::bearerToken();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createFromBase($request){
            return \Illuminate\Http\Request::createFromBase($request);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null){
            return \Illuminate\Http\Request::duplicate($query, $request, $attributes, $cookies, $files, $server);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function session(){
            return \Illuminate\Http\Request::session();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function user($guard = null){
            return \Illuminate\Http\Request::user($guard);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function route($param = null){
            return \Illuminate\Http\Request::route($param);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function fingerprint(){
            return \Illuminate\Http\Request::fingerprint();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUserResolver(){
            return \Illuminate\Http\Request::getUserResolver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setUserResolver($callback){
            return \Illuminate\Http\Request::setUserResolver($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRouteResolver(){
            return \Illuminate\Http\Request::getRouteResolver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRouteResolver($callback){
            return \Illuminate\Http\Request::setRouteResolver($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function toArray(){
            return \Illuminate\Http\Request::toArray();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetExists($offset){
            return \Illuminate\Http\Request::offsetExists($offset);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetGet($offset){
            return \Illuminate\Http\Request::offsetGet($offset);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetSet($offset, $value){
            return \Illuminate\Http\Request::offsetSet($offset, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetUnset($offset){
            return \Illuminate\Http\Request::offsetUnset($offset);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createFromGlobals(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::createFromGlobals();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setFactory($callable){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFactory($callable);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function overrideGlobals(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::overrideGlobals();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setTrustedProxies($proxies){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedProxies($proxies);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getTrustedProxies(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedProxies();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setTrustedHosts($hostPatterns){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getTrustedHosts(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHosts();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setTrustedHeaderName($key, $value){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHeaderName($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getTrustedHeaderName($key){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHeaderName($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function normalizeQueryString($qs){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::normalizeQueryString($qs);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function enableHttpMethodParameterOverride(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getHttpMethodParameterOverride(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function get($key, $default = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::get($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSession();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasPreviousSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasPreviousSession();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasSession();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setSession($session){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setSession($session);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getClientIps(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIps();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getClientIp(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIp();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getScriptName(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScriptName();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPathInfo(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPathInfo();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getBasePath(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBasePath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getBaseUrl(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBaseUrl();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getScheme(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScheme();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPort(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPort();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUser(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUser();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPassword(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPassword();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUserInfo(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUserInfo();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getHttpHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpHost();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRequestUri(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestUri();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getSchemeAndHttpHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSchemeAndHttpHost();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUri(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUri();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUriForPath($path){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUriForPath($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRelativeUriForPath($path){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRelativeUriForPath($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getQueryString(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getQueryString();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isSecure(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isSecure();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHost();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setMethod($method){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setMethod($method);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getMethod(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMethod();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRealMethod(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRealMethod();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getMimeType($format){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMimeType($format);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getFormat($mimeType){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getFormat($mimeType);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setFormat($format, $mimeTypes){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFormat($format, $mimeTypes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRequestFormat($default = 'html'){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestFormat($default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRequestFormat($format){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setRequestFormat($format);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getContentType(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContentType();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDefaultLocale($locale){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setDefaultLocale($locale);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDefaultLocale(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getDefaultLocale();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setLocale($locale){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setLocale($locale);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLocale(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLocale();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isMethod($method){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethod($method);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isMethodSafe(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodSafe();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getContent($asResource = false){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContent($asResource);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getETags(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getETags();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isNoCache(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isNoCache();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPreferredLanguage($locales = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPreferredLanguage($locales);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLanguages(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLanguages();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCharsets(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getCharsets();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getEncodings(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getEncodings();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getAcceptableContentTypes(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getAcceptableContentTypes();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isXmlHttpRequest(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isXmlHttpRequest();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function macro($name, $macro){
            return \Illuminate\Http\Request::macro($name, $macro);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Http\Request::hasMacro($name);
        }
        
    }


    class Response extends \Illuminate\Support\Facades\Response{
        
        /**
         * 
         *
         * @static 
         */
        public static function make($content = '', $status = 200, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::make($content, $status, $headers);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function view($view, $data = array(), $status = 200, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::view($view, $data, $status, $headers);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function json($data = array(), $status = 200, $headers = array(), $options = 0){
            return \Illuminate\Routing\ResponseFactory::json($data, $status, $headers, $options);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function jsonp($callback, $data = array(), $status = 200, $headers = array(), $options = 0){
            return \Illuminate\Routing\ResponseFactory::jsonp($callback, $data, $status, $headers, $options);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function stream($callback, $status = 200, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::stream($callback, $status, $headers);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function download($file, $name = null, $headers = array(), $disposition = 'attachment'){
            return \Illuminate\Routing\ResponseFactory::download($file, $name, $headers, $disposition);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function file($file, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::file($file, $headers);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function redirectTo($path, $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\ResponseFactory::redirectTo($path, $status, $headers, $secure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function redirectToRoute($route, $parameters = array(), $status = 302, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::redirectToRoute($route, $parameters, $status, $headers);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function redirectToAction($action, $parameters = array(), $status = 302, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::redirectToAction($action, $parameters, $status, $headers);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function redirectGuest($path, $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\ResponseFactory::redirectGuest($path, $status, $headers, $secure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function redirectToIntended($default = '/', $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\ResponseFactory::redirectToIntended($default, $status, $headers, $secure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function macro($name, $macro){
            return \Illuminate\Routing\ResponseFactory::macro($name, $macro);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Routing\ResponseFactory::hasMacro($name);
        }
        
    }


    class Route extends \Illuminate\Support\Facades\Route{
        
        /**
         * 
         *
         * @static 
         */
        public static function get($uri, $action = null){
            return \Illuminate\Routing\Router::get($uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function post($uri, $action = null){
            return \Illuminate\Routing\Router::post($uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function put($uri, $action = null){
            return \Illuminate\Routing\Router::put($uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function patch($uri, $action = null){
            return \Illuminate\Routing\Router::patch($uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function delete($uri, $action = null){
            return \Illuminate\Routing\Router::delete($uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function options($uri, $action = null){
            return \Illuminate\Routing\Router::options($uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function any($uri, $action = null){
            return \Illuminate\Routing\Router::any($uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function match($methods, $uri, $action = null){
            return \Illuminate\Routing\Router::match($methods, $uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function controllers($controllers){
            return \Illuminate\Routing\Router::controllers($controllers);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function controller($uri, $controller, $names = array()){
            return \Illuminate\Routing\Router::controller($uri, $controller, $names);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function singularResourceParameters(){
            return \Illuminate\Routing\Router::singularResourceParameters();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function resourceParameters($parameters = array()){
            return \Illuminate\Routing\Router::resourceParameters($parameters);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function resources($resources){
            return \Illuminate\Routing\Router::resources($resources);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function resource($name, $controller, $options = array()){
            return \Illuminate\Routing\Router::resource($name, $controller, $options);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function auth(){
            return \Illuminate\Routing\Router::auth();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function group($attributes, $callback){
            return \Illuminate\Routing\Router::group($attributes, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function mergeWithLastGroup($new){
            return \Illuminate\Routing\Router::mergeWithLastGroup($new);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function mergeGroup($new, $old){
            return \Illuminate\Routing\Router::mergeGroup($new, $old);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLastGroupPrefix(){
            return \Illuminate\Routing\Router::getLastGroupPrefix();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function dispatch($request){
            return \Illuminate\Routing\Router::dispatch($request);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function dispatchToRoute($request){
            return \Illuminate\Routing\Router::dispatchToRoute($request);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function gatherRouteMiddlewares($route){
            return \Illuminate\Routing\Router::gatherRouteMiddlewares($route);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function resolveMiddlewareClassName($name){
            return \Illuminate\Routing\Router::resolveMiddlewareClassName($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function matched($callback){
            return \Illuminate\Routing\Router::matched($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getMiddleware(){
            return \Illuminate\Routing\Router::getMiddleware();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function middleware($name, $class){
            return \Illuminate\Routing\Router::middleware($name, $class);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function middlewareGroup($name, $middleware){
            return \Illuminate\Routing\Router::middlewareGroup($name, $middleware);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function prependMiddlewareToGroup($group, $middleware){
            return \Illuminate\Routing\Router::prependMiddlewareToGroup($group, $middleware);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function pushMiddlewareToGroup($group, $middleware){
            return \Illuminate\Routing\Router::pushMiddlewareToGroup($group, $middleware);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function model($key, $class, $callback = null){
            return \Illuminate\Routing\Router::model($key, $class, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function bind($key, $binder){
            return \Illuminate\Routing\Router::bind($key, $binder);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createClassBinding($binding){
            return \Illuminate\Routing\Router::createClassBinding($binding);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function pattern($key, $pattern){
            return \Illuminate\Routing\Router::pattern($key, $pattern);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function patterns($patterns){
            return \Illuminate\Routing\Router::patterns($patterns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function prepareResponse($request, $response){
            return \Illuminate\Routing\Router::prepareResponse($request, $response);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasGroupStack(){
            return \Illuminate\Routing\Router::hasGroupStack();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getGroupStack(){
            return \Illuminate\Routing\Router::getGroupStack();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function input($key, $default = null){
            return \Illuminate\Routing\Router::input($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCurrentRoute(){
            return \Illuminate\Routing\Router::getCurrentRoute();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function current(){
            return \Illuminate\Routing\Router::current();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function has($name){
            return \Illuminate\Routing\Router::has($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function currentRouteName(){
            return \Illuminate\Routing\Router::currentRouteName();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function is(){
            return \Illuminate\Routing\Router::is();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function currentRouteNamed($name){
            return \Illuminate\Routing\Router::currentRouteNamed($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function currentRouteAction(){
            return \Illuminate\Routing\Router::currentRouteAction();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function uses(){
            return \Illuminate\Routing\Router::uses();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function currentRouteUses($action){
            return \Illuminate\Routing\Router::currentRouteUses($action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCurrentRequest(){
            return \Illuminate\Routing\Router::getCurrentRequest();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRoutes(){
            return \Illuminate\Routing\Router::getRoutes();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRoutes($routes){
            return \Illuminate\Routing\Router::setRoutes($routes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPatterns(){
            return \Illuminate\Routing\Router::getPatterns();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function macro($name, $macro){
            return \Illuminate\Routing\Router::macro($name, $macro);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Routing\Router::hasMacro($name);
        }
        
    }


    class Schema extends \Illuminate\Support\Facades\Schema{
        
        /**
         * 
         *
         * @static 
         */
        public static function hasTable($table){
            return \Illuminate\Database\Schema\MySqlBuilder::hasTable($table);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getColumnListing($table){
            return \Illuminate\Database\Schema\MySqlBuilder::getColumnListing($table);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasColumn($table, $column){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::hasColumn($table, $column);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasColumns($table, $columns){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::hasColumns($table, $columns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getColumnType($table, $column){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::getColumnType($table, $column);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function table($table, $callback){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::table($table, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function create($table, $callback){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::create($table, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function drop($table){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::drop($table);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function dropIfExists($table){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::dropIfExists($table);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function rename($from, $to){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::rename($from, $to);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function enableForeignKeyConstraints(){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::enableForeignKeyConstraints();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function disableForeignKeyConstraints(){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::disableForeignKeyConstraints();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getConnection(){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::getConnection();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setConnection($connection){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::setConnection($connection);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function blueprintResolver($resolver){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::blueprintResolver($resolver);
        }
        
    }


    class Session extends \Illuminate\Support\Facades\Session{
        
        /**
         * 
         *
         * @static 
         */
        public static function getSessionConfig(){
            return \Illuminate\Session\SessionManager::getSessionConfig();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Session\SessionManager::getDefaultDriver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDefaultDriver($name){
            return \Illuminate\Session\SessionManager::setDefaultDriver($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function driver($driver = null){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::driver($driver);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function extend($driver, $callback){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::extend($driver, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDrivers(){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::getDrivers();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function start(){
            return \Illuminate\Session\Store::start();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getId(){
            return \Illuminate\Session\Store::getId();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setId($id){
            return \Illuminate\Session\Store::setId($id);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isValidId($id){
            return \Illuminate\Session\Store::isValidId($id);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getName(){
            return \Illuminate\Session\Store::getName();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setName($name){
            return \Illuminate\Session\Store::setName($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function invalidate($lifetime = null){
            return \Illuminate\Session\Store::invalidate($lifetime);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function migrate($destroy = false, $lifetime = null){
            return \Illuminate\Session\Store::migrate($destroy, $lifetime);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function regenerate($destroy = false){
            return \Illuminate\Session\Store::regenerate($destroy);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function save(){
            return \Illuminate\Session\Store::save();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function ageFlashData(){
            return \Illuminate\Session\Store::ageFlashData();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function has($name){
            return \Illuminate\Session\Store::has($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function get($name, $default = null){
            return \Illuminate\Session\Store::get($name, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function pull($key, $default = null){
            return \Illuminate\Session\Store::pull($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasOldInput($key = null){
            return \Illuminate\Session\Store::hasOldInput($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getOldInput($key = null, $default = null){
            return \Illuminate\Session\Store::getOldInput($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function set($name, $value){
            return \Illuminate\Session\Store::set($name, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function put($key, $value = null){
            return \Illuminate\Session\Store::put($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function push($key, $value){
            return \Illuminate\Session\Store::push($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function increment($key, $amount = 1){
            return \Illuminate\Session\Store::increment($key, $amount);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function decrement($key, $amount = 1){
            return \Illuminate\Session\Store::decrement($key, $amount);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flash($key, $value){
            return \Illuminate\Session\Store::flash($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function now($key, $value){
            return \Illuminate\Session\Store::now($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flashInput($value){
            return \Illuminate\Session\Store::flashInput($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function reflash(){
            return \Illuminate\Session\Store::reflash();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function keep($keys = null){
            return \Illuminate\Session\Store::keep($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function all(){
            return \Illuminate\Session\Store::all();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function replace($attributes){
            return \Illuminate\Session\Store::replace($attributes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function remove($name){
            return \Illuminate\Session\Store::remove($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forget($keys){
            return \Illuminate\Session\Store::forget($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function clear(){
            return \Illuminate\Session\Store::clear();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flush(){
            return \Illuminate\Session\Store::flush();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isStarted(){
            return \Illuminate\Session\Store::isStarted();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function registerBag($bag){
            return \Illuminate\Session\Store::registerBag($bag);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getBag($name){
            return \Illuminate\Session\Store::getBag($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getMetadataBag(){
            return \Illuminate\Session\Store::getMetadataBag();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getBagData($name){
            return \Illuminate\Session\Store::getBagData($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function token(){
            return \Illuminate\Session\Store::token();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getToken(){
            return \Illuminate\Session\Store::getToken();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function regenerateToken(){
            return \Illuminate\Session\Store::regenerateToken();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function previousUrl(){
            return \Illuminate\Session\Store::previousUrl();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setPreviousUrl($url){
            return \Illuminate\Session\Store::setPreviousUrl($url);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setExists($value){
            return \Illuminate\Session\Store::setExists($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getHandler(){
            return \Illuminate\Session\Store::getHandler();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function handlerNeedsRequest(){
            return \Illuminate\Session\Store::handlerNeedsRequest();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRequestOnHandler($request){
            return \Illuminate\Session\Store::setRequestOnHandler($request);
        }
        
    }


    class Storage extends \Illuminate\Support\Facades\Storage{
        
        /**
         * 
         *
         * @static 
         */
        public static function drive($name = null){
            return \Illuminate\Filesystem\FilesystemManager::drive($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function disk($name = null){
            return \Illuminate\Filesystem\FilesystemManager::disk($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function cloud(){
            return \Illuminate\Filesystem\FilesystemManager::cloud();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createLocalDriver($config){
            return \Illuminate\Filesystem\FilesystemManager::createLocalDriver($config);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createFtpDriver($config){
            return \Illuminate\Filesystem\FilesystemManager::createFtpDriver($config);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createS3Driver($config){
            return \Illuminate\Filesystem\FilesystemManager::createS3Driver($config);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createRackspaceDriver($config){
            return \Illuminate\Filesystem\FilesystemManager::createRackspaceDriver($config);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Filesystem\FilesystemManager::getDefaultDriver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDefaultCloudDriver(){
            return \Illuminate\Filesystem\FilesystemManager::getDefaultCloudDriver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function extend($driver, $callback){
            return \Illuminate\Filesystem\FilesystemManager::extend($driver, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function exists($path){
            return \Illuminate\Filesystem\FilesystemAdapter::exists($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function get($path){
            return \Illuminate\Filesystem\FilesystemAdapter::get($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function put($path, $contents, $visibility = null){
            return \Illuminate\Filesystem\FilesystemAdapter::put($path, $contents, $visibility);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getVisibility($path){
            return \Illuminate\Filesystem\FilesystemAdapter::getVisibility($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setVisibility($path, $visibility){
            return \Illuminate\Filesystem\FilesystemAdapter::setVisibility($path, $visibility);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function prepend($path, $data, $separator = ''){
            return \Illuminate\Filesystem\FilesystemAdapter::prepend($path, $data, $separator);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function append($path, $data, $separator = ''){
            return \Illuminate\Filesystem\FilesystemAdapter::append($path, $data, $separator);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function delete($paths){
            return \Illuminate\Filesystem\FilesystemAdapter::delete($paths);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function copy($from, $to){
            return \Illuminate\Filesystem\FilesystemAdapter::copy($from, $to);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function move($from, $to){
            return \Illuminate\Filesystem\FilesystemAdapter::move($from, $to);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function size($path){
            return \Illuminate\Filesystem\FilesystemAdapter::size($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function mimeType($path){
            return \Illuminate\Filesystem\FilesystemAdapter::mimeType($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function lastModified($path){
            return \Illuminate\Filesystem\FilesystemAdapter::lastModified($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function url($path){
            return \Illuminate\Filesystem\FilesystemAdapter::url($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function files($directory = null, $recursive = false){
            return \Illuminate\Filesystem\FilesystemAdapter::files($directory, $recursive);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function allFiles($directory = null){
            return \Illuminate\Filesystem\FilesystemAdapter::allFiles($directory);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function directories($directory = null, $recursive = false){
            return \Illuminate\Filesystem\FilesystemAdapter::directories($directory, $recursive);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function allDirectories($directory = null){
            return \Illuminate\Filesystem\FilesystemAdapter::allDirectories($directory);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function makeDirectory($path){
            return \Illuminate\Filesystem\FilesystemAdapter::makeDirectory($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function deleteDirectory($directory){
            return \Illuminate\Filesystem\FilesystemAdapter::deleteDirectory($directory);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDriver(){
            return \Illuminate\Filesystem\FilesystemAdapter::getDriver();
        }
        
    }


    class URL extends \Illuminate\Support\Facades\URL{
        
        /**
         * 
         *
         * @static 
         */
        public static function full(){
            return \Illuminate\Routing\UrlGenerator::full();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function current(){
            return \Illuminate\Routing\UrlGenerator::current();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function previous($fallback = false){
            return \Illuminate\Routing\UrlGenerator::previous($fallback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function to($path, $extra = array(), $secure = null){
            return \Illuminate\Routing\UrlGenerator::to($path, $extra, $secure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function secure($path, $parameters = array()){
            return \Illuminate\Routing\UrlGenerator::secure($path, $parameters);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function asset($path, $secure = null){
            return \Illuminate\Routing\UrlGenerator::asset($path, $secure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function assetFrom($root, $path, $secure = null){
            return \Illuminate\Routing\UrlGenerator::assetFrom($root, $path, $secure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function secureAsset($path){
            return \Illuminate\Routing\UrlGenerator::secureAsset($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forceSchema($schema){
            return \Illuminate\Routing\UrlGenerator::forceSchema($schema);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function route($name, $parameters = array(), $absolute = true){
            return \Illuminate\Routing\UrlGenerator::route($name, $parameters, $absolute);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function action($action, $parameters = array(), $absolute = true){
            return \Illuminate\Routing\UrlGenerator::action($action, $parameters, $absolute);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forceRootUrl($root){
            return \Illuminate\Routing\UrlGenerator::forceRootUrl($root);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isValidUrl($path){
            return \Illuminate\Routing\UrlGenerator::isValidUrl($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRequest(){
            return \Illuminate\Routing\UrlGenerator::getRequest();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRequest($request){
            return \Illuminate\Routing\UrlGenerator::setRequest($request);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRoutes($routes){
            return \Illuminate\Routing\UrlGenerator::setRoutes($routes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setSessionResolver($sessionResolver){
            return \Illuminate\Routing\UrlGenerator::setSessionResolver($sessionResolver);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRootControllerNamespace($rootNamespace){
            return \Illuminate\Routing\UrlGenerator::setRootControllerNamespace($rootNamespace);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function macro($name, $macro){
            return \Illuminate\Routing\UrlGenerator::macro($name, $macro);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Routing\UrlGenerator::hasMacro($name);
        }
        
    }


    class Validator extends \Illuminate\Support\Facades\Validator{
        
        /**
         * 
         *
         * @static 
         */
        public static function make($data, $rules, $messages = array(), $customAttributes = array()){
            return \Illuminate\Validation\Factory::make($data, $rules, $messages, $customAttributes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function extend($rule, $extension, $message = null){
            return \Illuminate\Validation\Factory::extend($rule, $extension, $message);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function extendImplicit($rule, $extension, $message = null){
            return \Illuminate\Validation\Factory::extendImplicit($rule, $extension, $message);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function replacer($rule, $replacer){
            return \Illuminate\Validation\Factory::replacer($rule, $replacer);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function resolver($resolver){
            return \Illuminate\Validation\Factory::resolver($resolver);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getTranslator(){
            return \Illuminate\Validation\Factory::getTranslator();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPresenceVerifier(){
            return \Illuminate\Validation\Factory::getPresenceVerifier();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setPresenceVerifier($presenceVerifier){
            return \Illuminate\Validation\Factory::setPresenceVerifier($presenceVerifier);
        }
        
    }


    class View extends \Illuminate\Support\Facades\View{
        
        /**
         * 
         *
         * @static 
         */
        public static function file($path, $data = array(), $mergeData = array()){
            return \Illuminate\View\Factory::file($path, $data, $mergeData);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function make($view, $data = array(), $mergeData = array()){
            return \Illuminate\View\Factory::make($view, $data, $mergeData);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function of($view, $data = array()){
            return \Illuminate\View\Factory::of($view, $data);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function name($view, $name){
            return \Illuminate\View\Factory::name($view, $name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function alias($view, $alias){
            return \Illuminate\View\Factory::alias($view, $alias);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function exists($view){
            return \Illuminate\View\Factory::exists($view);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function renderEach($view, $data, $iterator, $empty = 'raw|'){
            return \Illuminate\View\Factory::renderEach($view, $data, $iterator, $empty);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getEngineFromPath($path){
            return \Illuminate\View\Factory::getEngineFromPath($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function share($key, $value = null){
            return \Illuminate\View\Factory::share($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function creator($views, $callback){
            return \Illuminate\View\Factory::creator($views, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function composers($composers){
            return \Illuminate\View\Factory::composers($composers);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function composer($views, $callback, $priority = null){
            return \Illuminate\View\Factory::composer($views, $callback, $priority);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function callComposer($view){
            return \Illuminate\View\Factory::callComposer($view);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function callCreator($view){
            return \Illuminate\View\Factory::callCreator($view);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function startSection($section, $content = ''){
            return \Illuminate\View\Factory::startSection($section, $content);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function inject($section, $content){
            return \Illuminate\View\Factory::inject($section, $content);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function yieldSection(){
            return \Illuminate\View\Factory::yieldSection();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function stopSection($overwrite = false){
            return \Illuminate\View\Factory::stopSection($overwrite);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function appendSection(){
            return \Illuminate\View\Factory::appendSection();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function yieldContent($section, $default = ''){
            return \Illuminate\View\Factory::yieldContent($section, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function startPush($section, $content = ''){
            return \Illuminate\View\Factory::startPush($section, $content);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function stopPush(){
            return \Illuminate\View\Factory::stopPush();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function yieldPushContent($section, $default = ''){
            return \Illuminate\View\Factory::yieldPushContent($section, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flushSections(){
            return \Illuminate\View\Factory::flushSections();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flushSectionsIfDoneRendering(){
            return \Illuminate\View\Factory::flushSectionsIfDoneRendering();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function incrementRender(){
            return \Illuminate\View\Factory::incrementRender();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function decrementRender(){
            return \Illuminate\View\Factory::decrementRender();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function doneRendering(){
            return \Illuminate\View\Factory::doneRendering();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addLocation($location){
            return \Illuminate\View\Factory::addLocation($location);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addNamespace($namespace, $hints){
            return \Illuminate\View\Factory::addNamespace($namespace, $hints);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function prependNamespace($namespace, $hints){
            return \Illuminate\View\Factory::prependNamespace($namespace, $hints);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addExtension($extension, $engine, $resolver = null){
            return \Illuminate\View\Factory::addExtension($extension, $engine, $resolver);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getExtensions(){
            return \Illuminate\View\Factory::getExtensions();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getEngineResolver(){
            return \Illuminate\View\Factory::getEngineResolver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getFinder(){
            return \Illuminate\View\Factory::getFinder();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setFinder($finder){
            return \Illuminate\View\Factory::setFinder($finder);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDispatcher(){
            return \Illuminate\View\Factory::getDispatcher();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDispatcher($events){
            return \Illuminate\View\Factory::setDispatcher($events);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getContainer(){
            return \Illuminate\View\Factory::getContainer();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setContainer($container){
            return \Illuminate\View\Factory::setContainer($container);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function shared($key, $default = null){
            return \Illuminate\View\Factory::shared($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getShared(){
            return \Illuminate\View\Factory::getShared();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasSection($name){
            return \Illuminate\View\Factory::hasSection($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getSections(){
            return \Illuminate\View\Factory::getSections();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getNames(){
            return \Illuminate\View\Factory::getNames();
        }
        
    }


    class Captcha extends \Mews\Captcha\Facades\Captcha{
        
        /**
         * 
         *
         * @static 
         */
        public static function create($config = 'default'){
            return \Mews\Captcha\Captcha::create($config);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function check($value){
            return \Mews\Captcha\Captcha::check($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function src($config = null){
            return \Mews\Captcha\Captcha::src($config);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function img($config = null){
            return \Mews\Captcha\Captcha::img($config);
        }
        
    }


    class Active extends \HieuLe\Active\Facades\Active{
        
        /**
         * 
         *
         * @static 
         */
        public static function updateInstances($route, $request){
            return \HieuLe\Active\Active::updateInstances($route, $request);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getClassIf($condition, $activeClass = 'active', $inactiveClass = ''){
            return \HieuLe\Active\Active::getClassIf($condition, $activeClass, $inactiveClass);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function checkUri($uris){
            return \HieuLe\Active\Active::checkUri($uris);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function checkUriPattern($patterns){
            return \HieuLe\Active\Active::checkUriPattern($patterns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function checkQuery($key, $value){
            return \HieuLe\Active\Active::checkQuery($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function checkRoute($routeNames){
            return \HieuLe\Active\Active::checkRoute($routeNames);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function checkRoutePattern($patterns){
            return \HieuLe\Active\Active::checkRoutePattern($patterns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function checkRouteParam($param, $value){
            return \HieuLe\Active\Active::checkRouteParam($param, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function checkAction($actions){
            return \HieuLe\Active\Active::checkAction($actions);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function checkController($controllers){
            return \HieuLe\Active\Active::checkController($controllers);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getMethod(){
            return \HieuLe\Active\Active::getMethod();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getAction(){
            return \HieuLe\Active\Active::getAction();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getController(){
            return \HieuLe\Active\Active::getController();
        }
        
    }


    class Entrust extends \Zizaco\Entrust\EntrustFacade{
        
        /**
         * 
         *
         * @static 
         */
        public static function hasRole($role, $requireAll = false){
            return \Zizaco\Entrust\Entrust::hasRole($role, $requireAll);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function can($permission, $requireAll = false){
            return \Zizaco\Entrust\Entrust::can($permission, $requireAll);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function ability($roles, $permissions, $options = array()){
            return \Zizaco\Entrust\Entrust::ability($roles, $permissions, $options);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function user(){
            return \Zizaco\Entrust\Entrust::user();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function routeNeedsRole($route, $roles, $result = null, $requireAll = true){
            return \Zizaco\Entrust\Entrust::routeNeedsRole($route, $roles, $result, $requireAll);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function routeNeedsPermission($route, $permissions, $result = null, $requireAll = true){
            return \Zizaco\Entrust\Entrust::routeNeedsPermission($route, $permissions, $result, $requireAll);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function routeNeedsRoleOrPermission($route, $roles, $permissions, $result = null, $requireAll = false){
            return \Zizaco\Entrust\Entrust::routeNeedsRoleOrPermission($route, $roles, $permissions, $result, $requireAll);
        }
        
    }


}



