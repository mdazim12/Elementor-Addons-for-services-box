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
				'label' => esc_html__( 'Repeater List', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					
					[
						'name'	=>'services_icon',
						'label'	=> esc_html__( 'Services Icon','elementor-addons'),
						'type'	=> \Elementor\Controls_Manager::ICONS,
						'default'=> [
							'value' => 'fas fa-circle',
							'library' => 'fa-solid',
						],
					],
					
					[
						'name' => 'list_title',
						'label' => esc_html__( 'Title', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( 'List Title' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'list_content',
						'label' => esc_html__( 'Content', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'List Content' , 'textdomain' ),
						'show_label' => false,
					],
					[
						'name' => 'services_btn',
						'label' => esc_html__( 'Button Label', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
					],
					[
						'name' => 'services_btn_LINK',
						'label' => esc_html__( 'Button Link', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::URL,
						'placeholder' => esc_html__( 'https://your-link.com', 'textdomain' ),
						'options' => [ 'url', 'is_external', 'nofollow' ],
						'default' => [
							'url' => '',
							'is_external' => true,
							'nofollow' => true,
							// 'custom_attributes' => '',
						],
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



		$this->add_control(
			'delete_content',
			[
				'label' => esc_html__( 'Delete Content', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::BUTTON,
				'button_type' => 'danger',
				'text' => esc_html__( 'Delete', 'textdomain' ),
				
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
