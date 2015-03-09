<h1>
    <img src="<?php echo base_url(); ?>assets/themes/default/images/status/<?php echo strtoupper($status); ?>.png" alt="" title="<?php echo $status; ?>" class="icon" />
    <?php echo ucfirst($status); ?> todos
</h1>
<?php
//success message
if ($this->session->flashdata('success')):
    ?>
    <div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('success'); ?></div>
<?php endif; ?>
<?php
//error message
if ($this->session->flashdata('error')):
    ?>
    <div class="alert alert-danger" role="alert"><?php echo $this->session->flashdata('error'); ?></div>
<?php endif; ?>    
    
<?php
//for bootstrap of table
$tbl_tmpl = array(
    'table_open' => '<table class="table">',
//    'heading_cell_start' => '<th>',
);
$tbl_heading = array(
    '0' => array('data' => 'Title', 'class' => 'col-sm-4'),
    '1' => array('data' => 'Description', 'class' => 'col-sm-4'),
    '2' => array('data' => 'Status', 'class' => 'col-sm-2'),
    '3' => array('data' => 'Action', 'class' => 'col-sm-2'));

$this->table->set_template($tbl_tmpl);
$this->table->set_heading($tbl_heading);

//generate table
echo $this->table->generate($todos);