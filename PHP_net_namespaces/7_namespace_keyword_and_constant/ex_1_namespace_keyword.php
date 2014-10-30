<?php

// om vie een abstracte manier elementen uit een namespace te halen kun je gebruik
//maken van namespace keyword en __NAMESPACE__ magic constant

namespace MyProject;

echo 'dit is de ' . __NAMESPACE__ . ' namespace';

