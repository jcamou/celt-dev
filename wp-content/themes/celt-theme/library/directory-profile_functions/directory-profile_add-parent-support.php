<?php 
function admin_init(){
    add_meta_box("case_study_parent_id", "Case Study Parent ID", "set_case_study_parent_id", "directory", "normal", "low");
}

add_action("admin_init", "admin_init");

//Meta box for setting the parent ID
function set_case_study_parent_id() {
    global $post;
    $custom = get_post_custom($post->ID);
    $parent_id = $custom['parent_id'][0];
    ?>
    <p>Please specify the ID of the page or post to be a parent to this Case Study.</p>
    <p>Leave blank for no heirarchy.  Case studies will appear from the server root with no assocaited parent page or post.</p>
    <input type="text" id="parent_id" name="parent_id" value="<?php echo $post->post_parent; ?>" />

    <?php
        // create a custom nonce for submit verification later
        echo '<input type="hidden" name="parent_id_noncename" value=" . wp_create_nonce(__FILE__) . " />';
}

// Save the meta data
function save_case_study_parent_id($post_id) {
    global $post;

    // make sure data came from our meta box
    if (!wp_verify_nonce($_POST['parent_id_noncename'],__FILE__)) return $post_id;
    if(isset($_POST['parent_id']) && ($_POST['post_type'] == "directory")) {
        $data = $_POST['parent_id'];
        update_post_meta($post_id, 'parent_id', $data);
    }
}

add_action("save_post", "save_case_study_parent_id");
?>