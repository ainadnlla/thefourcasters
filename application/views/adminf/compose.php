<?php
if($this->session->flashdata("message"))
{
  echo"<div class='alert alert-success'".$this->session->flashdata("message")."</div>";
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Mailbox
      <small>13 new messages</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Mailbox</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-3">
        <a href="<?=base_url().'user/inbox'?>" class="btn btn-primary btn-block margin-bottom">Back to Inbox</a>

        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Folders</h3>

            <div class="box-tools">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="box-body no-padding">
            <ul class="nav nav-pills nav-stacked">
              <li><a href="<?=base_url().'user/inbox'?>"><i class="fa fa-inbox"></i> Inbox
                <span class="label label-primary pull-right">12</span></a></li>
              <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
              <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
              <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a>
              </li>
              <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
            </ul>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Compose New Message</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
          <div class="form-group">
              <input class="form-control" placeholder="From:" name="from_email" required> 
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="To:" name="to_email" required> 
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Subject:" name="subject">
            </div>
            <div class="form-group">
                  <textarea id="compose-textarea" class="form-control" style="height: 300px" name="message" required>
                    
                  </textarea>
            </div>
            <div class="form-group">
              <div class="btn btn-default btn-file">
                <i class="fa fa-paperclip"></i> Attachment
                <input type="file" name="attachment" accept=".doc, .docs, .jpg, .png" required>
              </div>
              <p class="help-block">Max. 32MB</p>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <div class="pull-right">
              <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
              <button type="submit" action="<?php echo base_url();?>Email/send_mail" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
            </div>
            <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>

            <form method="post" action="<?php echo base_url();?>Email/send_mail" enctype="multipart/form-data"></form>
          </div>
          <!-- /.box-footer -->
        </div>
        <!-- /. box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
