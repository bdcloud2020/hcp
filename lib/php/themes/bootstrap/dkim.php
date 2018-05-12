<?php
// lib/php/themes/bootstrap/dkim.php 20180511 - 20180511
// Copyright (C) 2015-2018 Mark Constable <markc@renta.net> (AGPL-3.0)

class Themes_Bootstrap_Dkim extends Themes_Bootstrap_Theme
{
     public function list(array $in) : string
    {
error_log(__METHOD__);

       return '
        <div class="col-12">
          <h3>
            <i class="fas fa-address-card fa-fw"></i> DKIM
            <a href="#" title="Add New DKIM" data-toggle="modal" data-target="#createmodal">
              <small><i class="fas fa-plus-circle fa-fw"></i></small>
            </a>
          </h3>
        </div>
      </div><!-- END UPPER ROW -->
      <div class="row">
        <div class="col-12">
          <p>DKIM records will appear here... </p>
          <pre>' . $in['buf'] . '</pre>
        </div>
      </div>
    </div>';
    }
}

?>