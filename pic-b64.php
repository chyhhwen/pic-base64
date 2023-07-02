<?php
class picture
{
    public $path;
    public $b64_img;

    public function put_path($p)
    {
        $this->path = $p;
    }
    public function pic_base64()
    {
        $this->b64_img = chunk_split(base64_encode(file_get_contents($this->path)));
    }
    public function show_pic()
    {
        $val = "<img src=\"data:image/png;base64,";
        $val = $val . $this->b64_img;
        $val = $val . "\">";
        return $val;
    }
}
?>