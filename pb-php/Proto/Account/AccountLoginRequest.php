<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account.proto

namespace Proto\Account;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>proto.account.AccountLoginRequest</code>
 */
class AccountLoginRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * 账户名/平台openid
     * </pre>
     *
     * <code>int64 openid = 1;</code>
     */
    private $openid = 0;
    /**
     * <pre>
     * 密码    / token
     * </pre>
     *
     * <code>string token = 2;</code>
     */
    private $token = '';
    /**
     * <pre>
     * 分服id
     * </pre>
     *
     * <code>int32 sid = 3;</code>
     */
    private $sid = 0;
    /**
     * <pre>
     * 客户端类型
     * </pre>
     *
     * <code>int32 client_type = 4;</code>
     */
    private $client_type = 0;

    public function __construct() {
        \GPBMetadata\Account::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * 账户名/平台openid
     * </pre>
     *
     * <code>int64 openid = 1;</code>
     */
    public function getOpenid()
    {
        return $this->openid;
    }

    /**
     * <pre>
     * 账户名/平台openid
     * </pre>
     *
     * <code>int64 openid = 1;</code>
     */
    public function setOpenid($var)
    {
        GPBUtil::checkInt64($var);
        $this->openid = $var;
    }

    /**
     * <pre>
     * 密码    / token
     * </pre>
     *
     * <code>string token = 2;</code>
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * <pre>
     * 密码    / token
     * </pre>
     *
     * <code>string token = 2;</code>
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;
    }

    /**
     * <pre>
     * 分服id
     * </pre>
     *
     * <code>int32 sid = 3;</code>
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * <pre>
     * 分服id
     * </pre>
     *
     * <code>int32 sid = 3;</code>
     */
    public function setSid($var)
    {
        GPBUtil::checkInt32($var);
        $this->sid = $var;
    }

    /**
     * <pre>
     * 客户端类型
     * </pre>
     *
     * <code>int32 client_type = 4;</code>
     */
    public function getClientType()
    {
        return $this->client_type;
    }

    /**
     * <pre>
     * 客户端类型
     * </pre>
     *
     * <code>int32 client_type = 4;</code>
     */
    public function setClientType($var)
    {
        GPBUtil::checkInt32($var);
        $this->client_type = $var;
    }

}

