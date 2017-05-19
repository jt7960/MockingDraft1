<div>
    <h1>Create A League</h1>
    <?php
    $attributes = array('id'=>'', 'class'=>'', 'name'=>'form_create_league');
    echo form_open('nlff/create_league', $attributes);
    //league name
    $data = array('id'=> '', 'class'=> '', 'name'=>'league_name', 'value'=>'Enter League Name');
    echo form_input($data);
    ?>
    </form>
</div>
    
    