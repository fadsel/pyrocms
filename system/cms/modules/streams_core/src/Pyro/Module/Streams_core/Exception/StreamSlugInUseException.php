<?php namespace Pyro\Module\Streams_core\Exception;

class StreamSluginUseException extends Exception
{
	protected $message = 'Stream slug is already in use.';
}