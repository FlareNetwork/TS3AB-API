<?php
/**
 * Created by PhpStorm.
 * User: bennet
 * Date: 26.06.18
 * Time: 19:44
 */

namespace TS3AB;

use TS3AB\Commands\History;
use TS3AB\Commands\ListC;
use TS3AB\Commands\User;


/**
 * Class Ts3CommandCaller
 * @package TS3AB
 */
class Ts3CommandCaller {

    private $instance;

    /**
     * Ts3CommandCaller constructor.
     * @param Ts3AudioBot $ts3audioBotinstance
     */
    public function __construct(Ts3AudioBot $ts3audioBotinstance) {
        $this->instance = $ts3audioBotinstance;
    }


    /**
     * @param string $link
     * @return string json
     */
    public function play(string $link) {
        return $this->instance->request("play/" . rawurlencode($link));
    }

    /**
     * @return mixed
     */
    public function pause() {
        return $this->instance->request("pause");
    }

    /**
     * @return mixed
     */
    public function unpause() {
        return $this->instance->request("play");
    }

    /**
     * @return mixed
     */
    public function song() {
        return $this->instance->request("song");
    }

    /**
     * @return mixed
     */
    public function stop() {
        return $this->instance->request("stop");
    }

    /**
     * @param string $link
     * @return string json
     */
    public function add(string $link) {
        return $this->instance->request("add/" . rawurlencode($link));
    }

    /**
     * @return string json
     */
    public function makeCommander() {
        return $this->instance->request("bot/commander/on");
    }

    /**
     * @return mixed
     */
    public function takeCommander() {
        return $this->instance->request("bot/commander/off");
    }

    /**
     * @return mixed
     */
    public function come() {
        return $this->instance->request("bot/come");
    }

    /**
     * @return mixed
     */
    public function connectTo($templateName) {
        return $this->instance->request("bot/connect/to/" . rawurlencode($templateName));
    }

    /**
     * @return mixed
     */
    public function connectNew($ip) {
        return $this->instance->request("bot/connect/new/" . rawurlencode($ip));
    }

    /**
     * @return mixed
     */
    public function info() {
        return $this->instance->request("bot/info");
    }

    /**
     * @return mixed
     */
    public function listBots() {
        return $this->instance->rawRequest("bot/list");
    }

    /**
     * @return mixed
     */
    public function move() {
        return $this->instance->request("bot/move");
    }

    /**
     * @return mixed
     */
    public function name($name) {
        return $this->instance->request("bot/name/" . rawurlencode($name));
    }

    /**
     * @return mixed
     */
    public function badges() {
        return $this->instance->request("bot/badges");
    }

    /**
     * @return mixed
     */
    public function save($templateName) {
        return $this->instance->request("bot/save/" . rawurlencode($templateName));
    }

    /**
     * @return mixed
     */
    public function setup() {
        return $this->instance->request("bot/setup");
    }

    /**
     * @param $botid
     */
    public function use($botid) {
        $this->instance->botid = $botid;
    }

    /**
     * @return mixed
     */
    public function clear() {
        return $this->instance->request("clear");
    }

    /**
     * @return mixed
     */
    public function disconnect() {
        return $this->instance->request("disconnect");
    }

    /**
     * @return mixed
     */
    public function eval() {
        return $this->instance->request("eval");
    }

    /**
     * @return mixed
     */
    public function help() {
        return $this->instance->request("help");
    }



    /**
     * @return History
     */
    public function history() {
        return new History($this->instance);
    }

    /**
     * @return ListC
     */
    public function list() {
        return new ListC($this->instance);
    }

    /**
     * @return User
     */
    public function user() {
        return new User($this->instance);
    }

}