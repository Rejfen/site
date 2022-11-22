<?php
interface DataProcessor
{
    public function process() : void;

    public function getResult();

    public function getErrors(): array;
}