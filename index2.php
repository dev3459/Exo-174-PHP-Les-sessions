<?php
session_start();
echo isset($_SESSION['couleur']) ? $_SESSION['couleur'] : "Il n'y a pas de session couleur créer !";