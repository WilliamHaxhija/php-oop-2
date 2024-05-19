<?php trait Dimensions {
    public $width;
    public $height;

    public function getDimensions($_width, $_height) {
        $this->width = $_width;
        $this->height = $_height;
        return '$this->width, $this->height';
    }

}