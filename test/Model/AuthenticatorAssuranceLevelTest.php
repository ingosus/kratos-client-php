<?php
/**
 * AuthenticatorAssuranceLevelTest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Ory\Kratos\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Ory Kratos API
 *
 * Documentation for all public and administrative Ory Kratos APIs. Public and administrative APIs are exposed on different ports. Public APIs can face the public internet without any protection while administrative APIs should never be exposed without prior authorization. To protect the administative API port you should use something like Nginx, Ory Oathkeeper, or any other technology capable of authorizing incoming requests.
 *
 * The version of the OpenAPI document: v0.8.2-alpha.1
 * Contact: hi@ory.sh
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace Ory\Kratos\Client\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * AuthenticatorAssuranceLevelTest Class Doc Comment
 *
 * @category    Class
 * @description The authenticator assurance level can be one of \&quot;aal1\&quot;, \&quot;aal2\&quot;, or \&quot;aal3\&quot;. A higher number means that it is harder for an attacker to compromise the account.  Generally, \&quot;aal1\&quot; implies that one authentication factor was used while AAL2 implies that two factors (e.g. password + TOTP) have been used.  To learn more about these levels please head over to: https://www.ory.sh/kratos/docs/concepts/credentials
 * @package     Ory\Kratos\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class AuthenticatorAssuranceLevelTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "AuthenticatorAssuranceLevel"
     */
    public function testAuthenticatorAssuranceLevel()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
