<?php
/**
 * Booking Table
*/

class Top_Himalaya_Booking{

    /**
     * @var array
    */
    private $table_name;

    /**
     * Settling constructor.
    */
    public function __construct(){
        //set initial values
        $this->init_values();
        
        //create a table in database
        $this->create_table();
        
        //call all initial hooks
        $this->init_hooks();
    }

    /*
     * Function to initialize all values
    */
    public function init_values(){
        global $wpdb;
        
        //set initial values
        $this->table_name = $wpdb->prefix . 'top_himalaya_booking';
    }

    /**
     * Function to create a table in database
     * @return void
    */
	public function create_table(){
        global $wpdb;
        
        //check if this table already exists
	    if ( $wpdb->get_var( "SHOW TABLES LIKE '$this->table_name'" ) != $this->table_name ) {
		    $charset_collate = $wpdb->get_charset_collate();

		    $sql = "CREATE TABLE $this->table_name (
                id bigint(20) NOT NULL AUTO_INCREMENT,
                full_name varchar(255) NOT NULL,
                email varchar(255) NOT NULL,
                nationality varchar(255) NOT NULL,
                contact_no varchar(255) NOT NULL,
                emergency_contact varchar(255) NOT NULL,
                relationship varchar(255) NOT NULL,
                medical_issue varchar(255) NOT NULL,
                adult varchar(25) NOT NULL,
                child varchar(25) NOT NULL,
                infant varchar(25) NOT NULL,
                pp_size_photo varchar(255) NOT NULL,
                are_you_vegeterain tinyint(1) NOT NULL,
                are_you_married tinyint(1) NOT NULL,
                passport varchar(255) NOT NULL,
                travel_insurance varchar(255) NOT NULL,
                passport_no varchar(255) NOT NULL,
                arrival_date varchar(255) NOT NULL,
                departure_date varchar(255) NOT NULL,
                your_message varchar(255) NOT NULL,
                trip varchar(255) NOT NULL,
                PRIMARY KEY (id)
            ) $charset_collate;";

		    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

		    dbDelta( $sql );
	    }
    }

    /**
     * Function to call all initial hooks
     * @return void
     */
	public function init_hooks(){		
		//admin scripts
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );

        add_action( 'admin_menu', array( $this, 'admin_page' ) );
        
        add_action( 'wp_ajax_booking_form', array( $this, 'booking_form_submit' ) );
        add_action( 'wp_ajax_nopriv_booking_form', array( $this, 'booking_form_submit' ) );
	}

    /**
	 * Function to enqueue admin scripts
	 *
	 * @return void
	 */
	public function admin_scripts(){
		if( isset( $_GET['page'] ) && ( $_GET['page'] == 'booking-table' ) ){
			wp_enqueue_style( 'top-himalaya-admin', get_stylesheet_directory_uri() . '/assets/css/admin.css', [], time() );
		}
	}

    /**
     * add submenu page to admin panel under Woocommerce after orders
    */
    public function admin_page(){
        add_menu_page(
            'Booking Table',
            'Booking Table',
            'manage_options',
            'booking-table',
            array($this, 'booking_page_callback'),
            'dashicons-groups',
            55
        );
    }

    /**
     * list of all_values with pagination
	 * @return void
	*/
	public function booking_page_callback(){ ?>
        <div class="booking_admin_page">
            <h1>Booking Table</h1>

            <div class="booking_table">
                <table class="table" style="width: 100%; text-align: center;">
                    <thead>
                        <tr>
                            <th><?php esc_html_e( 'ID' ); ?></th>
                            <th><?php esc_html_e( 'Full Name' ); ?></th>
                            <th><?php esc_html_e( 'Email' ); ?></th>
                            <th><?php esc_html_e( 'Nationality' ); ?></th>
                            <th><?php esc_html_e( 'Contact No.' ); ?></th>
                            <th><?php esc_html_e( 'Emergency Contact' ); ?></th>
                            <th><?php esc_html_e( 'Relationship' ); ?></th>
                            <th><?php esc_html_e( 'Medical Issue' ); ?></th>
                            <th><?php esc_html_e( 'Adult' ); ?></th>
                            <th><?php esc_html_e( 'Child' ); ?></th>
                            <th><?php esc_html_e( 'Infant' ); ?></th>
                            <th><?php esc_html_e( 'Photo' ); ?></th>
                            <th><?php esc_html_e( 'Vegeterian' ); ?></th>
                            <th><?php esc_html_e( 'Married' ); ?></th>
                            <th><?php esc_html_e( 'Passport' ); ?></th>
                            <th><?php esc_html_e( 'Insurance' ); ?></th>
                            <th><?php esc_html_e( 'Passport No.' ); ?></th>
                            <th><?php esc_html_e( 'Arrival Date' ); ?></th>
                            <th><?php esc_html_e( 'Departure Date' ); ?></th>
                            <th><?php esc_html_e( 'Message' ); ?></th>
                            <th><?php esc_html_e( 'Trip' ); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php                            
                            $data = $this->get_all_values();
                            $values = $data['values'];
                            $total = $data['total'];

                            if( $total > 0 ){
                                foreach( $values as $val ){ ?>
                                    <tr>
                                        <td><?php echo $val->id; ?></td>
                                        <td><?php echo $val->full_name; ?></td>
                                        <td><?php echo $val->email; ?></td>
                                        <td><?php echo $val->nationality; ?></td>
                                        <td><?php echo $val->contact_no; ?></td>
                                        <td><?php echo $val->emergency_contact; ?></td>
                                        <td><?php echo $val->relationship; ?></td>
                                        <td><?php echo $val->medical_issue; ?></td>
                                        <td><?php echo $val->adult; ?></td>
                                        <td><?php echo $val->child; ?></td>
                                        <td><?php echo $val->infant; ?></td>
                                        <td><a href="<?php echo esc_url( $val->pp_size_photo ); ?>" target="_blank"><?php echo $val->pp_size_photo; ?></a></td>
                                        <td><?php echo ( $val->are_you_vegeterain ) ? 'Yes' : 'No' ; ?></td>
                                        <td><?php echo ( $val->are_you_married ) ? 'Yes' : 'No'; ?></td>
                                        <td><a href="<?php echo esc_url( $val->passport ); ?>" target="_blank"><?php echo $val->passport; ?></a></td>
                                        <td><a href="<?php echo esc_url( $val->travel_insurance ); ?>" target="_blank"><?php echo $val->travel_insurance; ?></a></td>
                                        <td><?php echo $val->passport_no; ?></td>
                                        <td><?php echo $val->arrival_date; ?></td>
                                        <td><?php echo $val->departure_date; ?></td>
                                        <td><?php echo $val->your_message; ?></td>
                                        <td><?php echo $val->trip; ?></td>
                                    </tr>
                                    <?php
                                }                                
                            }else{ ?>
                                <tr>
                                    <td colspan="20"><?php esc_html_e('No Data Found', 'vibes-child') ?></td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>

                <!-- Pagination -->
	            <div class="booking_pagination_wrapper">
		            <?php
                        $pages = ceil($total / 20);
                        $paged = (isset($_GET['paged'])) ? $_GET['paged'] : 1;
                        if($paged > '1'){ ?>
                            <a href="<?php echo admin_url('admin.php?page=booking-table&paged='.($paged - 1)); ?>"><?php esc_html_e('Previous', 'vibes-child') ?></a>
                            <?php
                        }
		            
                        //if pages are more than 5, show only 5 pages with current page as center
                        if ($pages > 5){
                            $start = $paged - 2;
                            $end = $paged + 2;
                            if ($start < 1){
                                $start = 1;
                                $end = 5;
                            }
                            if ($end > $pages){
                                $start = $pages - 4;
                                $end = $pages;
                            }
                        }else{
                            $start = 1;
                            $end = $pages;
                        }
		            
                        if ($pages > 1){ ?>
                            <div class="booking_pagination">
                                <ul>
                                    <?php
                                        for ($i = $start; $i <= $end; $i++){                                            
                                            //if $i is equal to $paged, add class active to li
                                            $class = ($i == $paged) ? 'active' : ''; ?>
                                            <li>
                                                <a class="<?php echo esc_attr($class) ?>" href="<?php echo admin_url('admin.php?page=booking-table&paged='.$i); ?>"><?php echo $i; ?></a>
                                            </li>
                                            <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                            <?php
                        }
                        
                        if($paged < $pages){ ?>
                            <a href="<?php echo admin_url('admin.php?page=booking-table&paged='.($paged + 1)); ?>"><?php esc_html_e('Next', 'vibes-child') ?></a>
                            <?php
                        }
		            ?>
	            </div>
            </div>
        </div>
        <?php
    }

    /**
     * Function to get all values with pagination
     * @return array
    */
    public function get_all_values( $data = [], $allData = false ){
	    global $wpdb;        
        
        if($allData){
            $values = $wpdb->get_results("SELECT * FROM $this->table_name");
            $result = [
                'success' => true,
                'values' => $values,
            ];
        }else{
            $page = $_GET['paged'] ?? 1;
            $limit = $data['limit'] ?? 20;
            $offset = ($page - 1) * $limit;
            $values = $wpdb->get_results("SELECT * FROM $this->table_name LIMIT $limit OFFSET $offset");
            $total = $wpdb->get_var("SELECT COUNT(*) FROM $this->table_name");
            $result = [
                'success' => true,
                'values' => $values,
                'total' => $total,
            ];
        }
	    
	    return $result;
    }

    /**
	 * Function to add new value
	*/
	public function add_booking( $data ){
		global $wpdb;
		
        $wpdb->insert( 
            $this->table_name,
            array(
                'full_name'          => sanitize_text_field( $data['full_name'] ),
                'email'              => sanitize_email( $data['email'] ),
                'nationality'        => sanitize_text_field( $data['nationality'] ),
                'contact_no'         => sanitize_text_field( $data['contact_no'] ),
                'emergency_contact'  => sanitize_text_field( $data['emergency_contact'] ),
                'relationship'       => sanitize_text_field( $data['relationship'] ),
                'medical_issue'      => sanitize_text_field( $data['medical_issue'] ),
                'adult'              => absint( $data['adult'] ),
                'child'              => absint( $data['child'] ),
                'infant'             => absint( $data['infant'] ),
                'pp_size_photo'      => esc_url_raw( $data['pp_size_photo'] ),
                'are_you_vegeterain' => absint( $data['are_you_vegeterain'] ),
                'are_you_married'    => absint( $data['are_you_married'] ),
                'passport'           => esc_url_raw( $data['passport'] ),
                'travel_insurance'   => esc_url_raw( $data['travel_insurance'] ),
                'passport_no'        => sanitize_text_field( $data['passport_no'] ),
                'arrival_date'       => sanitize_text_field( $data['arrival_date'] ),
                'departure_date'     => sanitize_text_field( $data['departure_date'] ),
                'your_message'       => wp_kses_post( $data['your_message'] ),
                'trip'               => sanitize_text_field( $data['trip'] ),
            )
        );

		if ( $wpdb->last_error ) {
			$result = [
				'success' => false,
				'error' => $wpdb->last_error,
			];
		} else {
			$result = [
				'success' => true,
				'id' => $wpdb->insert_id,
			];
		}

        $result['action'] = 'added';
		return $result;
	}

    public function booking_form_submit(){
        parse_str($_POST['data'], $data);


        if( $data ){
            // Add details from form to database
            $result = $this->add_booking( $data );

            $to = apply_filters( 'top_himalaya_booking_email', get_option( 'admin_email' ) );
	        $headers = array('Content-Type: text/html; charset=UTF-8');
            $subject = apply_filters( 'top_himalaya_booking_subject', sprintf( 'Booking for %s', $data['trip'] ) );

            $message = '<p>Hello,</p>';
            $message .= '<p>Here is the details of <strong>' . $data['trip'] . '</strong> booking.</p>';
            $message .= '<p>Full Name: ' . $data['full_name'] . '</p>';
            $message .= '<p>Email: ' . $data['email'] . '</p>';
            $message .= '<p>Nationality: ' . $data['nationality'] . '</p>';
            $message .= '<p>Contact No.: ' . $data['contact_no'] . '</p>';
            $message .= '<p>Emergency Contact: ' . $data['emergency_contact'] . '</p>';
            $message .= '<p>Relationship: ' . $data['relationship'] . '</p>';
            $message .= '<p>Do you have any medical issue? ' . $data['medical_issue'] . '</p>';
            $message .= '<p>Adult: ' . $data['adult'] . '</p>';
            $message .= '<p>Child: ' . $data['child'] . '</p>';
            $message .= '<p>Infant: ' . $data['infant'] . '</p>';
            $message .= '<p>Passport size photo: ' . $data['pp_size_photo'] . '</p>';
            $message .= '<p>Are you vegetarian? ';
            $message .= ( $data['are_you_vegeterain'] ) ? 'Yes' : 'No';
            $message .= '</p>';
            $message .= '<p>Are you married? ';
            $message .= ( $data['are_you_married'] ) ? 'Yes' : 'No';
            $message .= '</p>';
            $message .= '<p>Passport: ' . $data['passport'] . '</p>';
            $message .= '<p>Travel Insurance: ' . $data['travel_insurance'] . '</p>';
            $message .= '<p>Passport No.: ' . $data['passport_no'] . '</p>';
            $message .= '<p>Arrival Date: ' . $data['arrival_date'] . '</p>';
            $message .= '<p>Departure Date: ' . $data['departure_date'] . '</p>';
            $message .= 'Message: ' . wpautop( wp_kses_post( $data['your_message'] ) );

            $body = apply_filters( 'top_himalaya_booking_body', $message );

            $mail = wp_mail( $to, $subject, $body, $headers );

            if( $mail ){
                wp_send_json_success( 'Mail sent successfully.' );
            }else{
                wp_send_json_error( 'Mail not sent.' );
            }
        }else{
            wp_send_json_error( 'Data not sent.' );
        }

        wp_die();
    }
}

/*
 * Initialize the class
*/
$top_himalaya_booking = new Top_Himalaya_Booking();