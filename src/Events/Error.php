<?php

namespace Alexusmai\LaravelFileManager\Events;

use Illuminate\Http\Request;

class Error
{
    /**
     * @var string
     */
    private $disk;

    /**
     * @var string
     */
    private $path;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $target;


    /**
     * @var string
     */
    private $action;

    /**
     * @var string
     */
    private $target_id;

    /**
     * DirectoryCreating constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->disk = $request->input('disk');
        $this->path = $request->input('path');
        $this->name = $request->input('name');
        $this->target = $request->input('target');
        $this->target_id = $request->input('target_id');
        $this->action = $request->input('action');
    }

    /**
     * @return string
     */
    public function disk()
    {
        return $this->disk;
    }

    /**
     * @return string
     */
    public function path()
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function target()
    {
        return $this->target;
    }

    /**
     * @return string
     */
    public function action()
    {
        return $this->action;
    }

    /**
     * @return string
     */
    public function target_id()
    {
        return $this->target_id;
    }
}
