<?php

function setActive($rutaName){

    return request()->routeIs($rutaName) ? 'active' : '';
}