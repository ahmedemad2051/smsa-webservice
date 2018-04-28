<?php

/*
 * This file is part of Smsa WebService package.
 * (c) Hamoud Alhoqbani <h.alhoqbani@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alhoqbani\SmsaWebService\Response;

class SMSAResponse
{
    public $success;
    public $data;
    public $error;
    public $type;
    public $payload;
    public $request;
    public $response;

    /**
     * SMSAResponse constructor.
     *
     * @param bool $success
     * @param null $data
     * @param null $error
     * @param      $type
     * @param      $payload
     * @param      $request
     * @param      $response
     */
    public function __construct(bool $success, $data = null, $error = null, string $type, $payload, $request, $response)
    {
        $this->success = $success;
        $this->data = $data;
        $this->type = $type;
        $this->payload = $payload;
        $this->request = $request;
        $this->response = $response;
        $this->error = ($error instanceof \SoapFault) ? $error->faultstring : $error;
    }
}
