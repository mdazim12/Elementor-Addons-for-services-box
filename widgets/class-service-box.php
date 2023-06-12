<?php
namespace ElementorAddons\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Scheme_Typography;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Image_Size;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * @since 1.1.0
 */
class ServiceBox extends Widget_Base {

	public function get_name() {
		return 'service-box';
	}

	public function get_title() {
		return __( 'Service Box', 'elementor-addons' );
	}

	public function get_icon() {
		return ' eicon-kit-details';
	}

    public function get_categories()
    {
        return ['custom-addons'];
    }

    protected function _register_controls() {

		$this->start_controls_section(
			'box',
			[
				'label' => __( 'Service Box', 'elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
        );
		
        // Service Box Repeter Controll
		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'Service List', 'elementor-addons' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					



                    [
						'name' => 'list_title',
						'label' => esc_html__( 'Title', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( 'List Title' , 'textdomain' ),
						'label_block' => true,
					],

                    [
                        'label' => esc_html__( 'Icon', 'textdomain' ),
                        'type' => \Elementor\Controls_Manager::ICONS,
                        'default' => [
                            'value' => 'fas fa-circle',
                            'library' => 'fa-solid',
                        ]
                        
                    ],


					
				],
				'default' => [
					[
						'list_title' => esc_html__( 'Title #1', 'textdomain' ),
						'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'textdomain' ),
					],
					[
						'list_title' => esc_html__( 'Title #2', 'textdomain' ),
						'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'textdomain' ),
					],
				],
				'title_field' => '{{{ list_title }}}',
			]
		);
		
        
        
       
      
       
        
        
        
         
          

             
        $this->end_controls_section();

    }
    
    
	protected function render() {
		$settings = $this->get_settings_for_display(); ?>

    
	<div class="main_body">
		<div class="container">
         <div class="box">
            <div class="icon"><i class="fas fa-car-alt"></i></div>
            <div class="content">
               <h3>Service Name</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga iusto aperiam culpa excepturi enim harum!</p>
               <a href="#">Read More</a>
            </div>
         </div>
      	</div>
	</div>


	<?php	
	}

	

}
