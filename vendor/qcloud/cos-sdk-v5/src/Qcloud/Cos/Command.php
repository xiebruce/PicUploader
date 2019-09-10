<?php

namespace Qcloud\Cos;
use GuzzleHttp\Command\Command as CommandInterface;

class Command extends GuzzleCommand {
    /**
     * Create a pre-signed URL for the operation
     *
     * @param int|string $expires The Unix timestamp to expire at or a string that can be evaluated by strtotime
     *
     * @return string
     */
    public function createPresignedUrl($expires)
    {
        // return $this->client->createPresignedUrl($this->prepare(), $expires);
    }
    public function createAuthorization($expires)
    {
        // return $this->client->createAuthorization($this->prepare(), $expires);
    }

    protected function process() {
        parent::process();
        // Set the GetObject URL if using the PutObject operation
        if ($this->result instanceof Model && $this->getName() == 'PutObject') {
            $request = $this->getRequest();
            $this->result->set('ObjectURL', $request->getUrl());
        }
    }
}
