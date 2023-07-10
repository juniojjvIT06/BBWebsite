<?php

/**
 * @package   Barn2\table-generator
 * @author    Barn2 Plugins <support@barn2.com>
 * @license   GPL-3.0
 * @copyright Barn2 Media Ltd
 */
namespace Barn2\Plugin\Posts_Table_Pro\Dependencies\Barn2\Table_Generator;

use Barn2\Plugin\Posts_Table_Pro\Dependencies\Barn2\Table_Generator\Routes\Extra_Fields;
class Demo_Extra_Fields extends Extra_Fields
{
    public function get_extra_fields()
    {
        return [['type' => 'text', 'label' => \__('%s per page'), 'name' => 'rows_per_page'], ['type' => 'text', 'label' => \__('%s limit'), 'description' => \__('The maximum number of %contentType% in one table.'), 'name' => 'post_limit'], ['type' => 'select', 'label' => \__('Search box'), 'name' => 'search_box', 'options' => Util::parse_array_for_dropdown(['top' => \__('Above table'), 'bottom' => \__('Below table'), 'both' => \__('Above and below table'), 'false' => \__('Hidden')])], ['type' => 'checkbox', 'label' => \__('Caching'), 'description' => \__('Cache table contents to improve load times.'), 'name' => 'cache'], ['type' => 'text', 'label' => \__('Button text'), 'description' => \sprintf(\__('If your table uses the "button" column. <a href="%s" target="_blank">Read more</a>'), 'https://barn2.com/kb/posts-table-button-column'), 'name' => 'button_text']];
    }
}
