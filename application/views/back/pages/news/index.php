<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
  <div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5"><?php echo ucfirst(str_replace('_', ' ', $this->uri->segment(2))); ?></h4>
    <p class="mg-b-0"><?php echo subtitle(); ?></p>
    <hr>
  </div><!-- d-flex -->
  <div class="br-pagebody mg-t-0 pd-x-30">
    <?php if(isset($_SESSION['flashdata'])): ?>
      <div id="alert-box"><?php echo $_SESSION['flashdata']; ?></div>
    <?php endif; ?>
    <div class="table-wrapper">
      <table id="datatable1" class="table display responsive nowrap">
        <thead>
          <tr>
            <th class="wd-5p align-top">L.p.</th>
            <th class="wd-5p align-top">Główny</th>
            <th class="wd-45p align-top">Tytuł</th>
            <th class="wd-50p text-right no-sort">
              <a href="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/form/insert" class="btn btn-sm btn-info"><i class="fa fa-plus mg-r-10"></i> Dodaj</a>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php $i=0; foreach (array_reverse($rows) as $value): $i++; ?>
          <tr>
            <td class="align-middle"><?php echo $i; ?>.</td>
            <td class="align-middle">
              <label class="ckbox">
                <input class="main-ckbox" type="checkbox" id="check<?= $value->id  ?>" onchange="checkbox(<?= $value->id  ?>, '<?= $this->uri->segment(2) ?>', 'main');" <?= @$value->main ? 'checked' : '' ?> >
                <span></span>
              </label>
            </td>
            <td class="align-middle"><?php echo $value->title; ?></td>
            <td class="text-right">
              <a href="<?php echo base_url(); ?>panel/settings/gallery/<?php echo $this->uri->segment(2); ?>/<?php echo $value->id; ?>" class="btn btn-sm btn-secondary"><i class="icon ion-images mg-r-10"></i> Galeria</a>
              <a href="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/form/update/<?php echo $value->id; ?>" class="btn btn-sm btn-info"><i class="icon ion-compose mg-r-10"></i> Edytuj</a>
              <a href="<?php echo base_url(); ?>panel/settings/delete/<?php echo $this->uri->segment(2); ?>/<?php echo $value->id; ?>" class="btn btn-sm btn-secondary"
                onclick="return confirm('Czy na pewno chcesz usunąć <?php echo $value->title; ?>? #<?php echo $value->id; ?>')" >
                <i class="fa fa-close mg-r-10"></i> Usuń
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <script type="text/javascript">
    function setDisabledCheckboxes() {

      let ckboxes = [...document.getElementsByClassName('main-ckbox')];
      if(ckboxes.some(ckbox => ckbox.checked)) {

        ckboxes.forEach(ckbox => {
          if(!ckbox.checked) ckbox.disabled = true;
        })
      } else {
        ckboxes.forEach(ckbox => ckbox.disabled = false)
      }
    }
    function checkbox(id, table, field) {
      value = document.getElementById('check'+id).checked;
      if(value == true) { value = 1;} else {value = 0;}
      setDisabledCheckboxes();
      $.ajax({
        type: "post",
        url:"<?= base_url() ?>panel/news/checkbox",
        data: {id:id, value:value, table:table, field:field},
        cache: false,
        beforeSend:function(html){
        },
        complete:function(html){
        }
      });
    }
    
    setDisabledCheckboxes()
    
  </script>