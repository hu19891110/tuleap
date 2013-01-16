<?php

/**
 * Copyright (c) Enalean, 2013. All rights reserved
 *
 * This file is a part of Tuleap.
 *
 * Tuleap is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Tuleap is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Tuleap. If not, see <http://www.gnu.org/licenses/
 */

class View {
    
    private $file_location;
    private $file_extension;
    
    public function __construct($file_location_without_extension, $file_extension) {
        $this->file_location = $file_location_without_extension;
        $this->file_extension = $file_extension;
    }
    
    
    public function __set($name, $value) {
        if($name == 'file_location' || $name == 'file_extension') {
            throw new Exception('reserved class properties');
        }
        
        $this->$name = $value;
    }
    
    public function render() {
        include($GLOBALS['Language']->getContent($this->file_location, null, null, $this->file_extension));
    }
}
?>
