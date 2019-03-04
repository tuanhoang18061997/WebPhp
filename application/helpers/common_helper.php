<?php
function public_url($url='')
{
    return base_url('public/'.$url); //đã cấu hình trong config/config.php
}