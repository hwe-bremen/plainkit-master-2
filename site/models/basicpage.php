<?php


class BasicpagePage extends Page
{
    public function cover()
{
    return $this->content()->get('cover')->toFile() ?? $this->image();

}
}