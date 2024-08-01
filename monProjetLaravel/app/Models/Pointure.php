<?php


class Pointure extends Item {

    private int $pointure;

    public function __construct(array $item) {
        parent::__construct($item);
        if (isset($item['pointure'])) {
            $this->pointure = $item['pointure'];
        }
    }

    public function getPointure(): int {
        return $this->pointure;
    }

    public function setPointure($pointure): void {
        $this->pointure = $pointure;
    }

}