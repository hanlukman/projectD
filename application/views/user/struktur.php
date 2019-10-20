<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Divisi
        <small>Show Data Diagram</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Turtle</li>
      </ol>
    </section>
    <section class="content">

      <!-- MDT -->
      <div class="col-md-3">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Manufactur Digital Technology</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
          
           <div class="list-group">
            <h4>
                <?php foreach ($d_divisi as $dvs) : ?>   
                    <button type="button" class="list-group-item"><a href="<?php echo base_url('c_struktur/viewprocessbyid/'.$dvs->id_divisi) ?>"><?php echo  $dvs->nama; ?></a></button>
              <?php endforeach; ?>
              </h4>
            </div>
           
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>










    </section>
                </div>
            </section>
           </div>
        </div>
      </div>
    </div>
  </div>

