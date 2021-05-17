<?php

session_start();

session_destroy();
session_unset();

header("location:/SAPA 2/index.html");
