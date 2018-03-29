<!DOCTYPE html>
<html>
<head>
<meta>
        <meta charset="UTF-8">
        <title>Post Method</title>
 
    <meta class="foundation-mq"></head>
    <body>

        <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="row">
        <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
            <li role="menuitem">Advanced PHP: Forms</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    
    <div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Form</h4>
        <form method="POST">
          <div class="row">
            <div class="medium-1  columns">
              <label>Phone</label>
              <select name="phone1">
                <?php
                for($i = 0; $i < 9; $i++)
                {
                ?>
                <option><?php echo $i; ?></option>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="medium-1  columns">
              <label>&nbsp;</label>
              <select>
                <?php
                for($i = 0; $i < 9; $i++)
                {
                ?>
                <option><?php echo $i; ?></option>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="medium-1  columns">
              <label>&nbsp;</label>
              <select>
                <?php
                for($i = 0; $i < 9; $i++)
                {
                ?>
                <option><?php echo $i; ?></option>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="medium-1  columns">
              <label>&nbsp;</label>
              <select>
                <?php
                for($i = 0; $i < 9; $i++)
                {
                ?>
                <option><?php echo $i; ?></option>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="medium-1  columns">
              <label>&nbsp;</label>
              <select>
                <?php
                for($i = 0; $i < 9; $i++)
                {
                ?>
                <option><?php echo $i; ?></option>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="medium-1  columns">
              <label>&nbsp;</label>
              <select>
                <?php
                for($i = 0; $i < 9; $i++)
                {
                ?>
                <option><?php echo $i; ?></option>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="medium-1  columns">
              <label>&nbsp;</label>
              <select>
                <?php
                for($i = 0; $i < 9; $i++)
                {
                ?>
                <option><?php echo $i; ?></option>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="medium-1  columns">
              <label>&nbsp;</label>
              <select>
                <?php
                for($i = 0; $i < 9; $i++)
                {
                ?>
                <option><?php echo $i; ?></option>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="medium-1  columns">
              <label>&nbsp;</label>
              <select>
                <?php
                for($i = 0; $i < 9; $i++)
                {
                ?>
                <option><?php echo $i; ?></option>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="medium-1  columns">
              <label>&nbsp;</label>
              <select>
                <?php
                for($i = 0; $i < 9; $i++)
                {
                ?>
                <option><?php echo $i; ?></option>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="medium-1  columns">
              <label>&nbsp;</label>
              <select>
                <?php
                for($i = 0; $i < 9; $i++)
                {
                ?>
                <option><?php echo $i; ?></option>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="medium-1  columns">
              <label>&nbsp;</label>
              <select>
                <?php
                for($i = 0; $i < 9; $i++)
                {
                ?>
                <option><?php echo $i; ?></option>
                <?php
                }
                ?>
              </select>
            </div>
          </div>
          <div class="medium-12  columns">
            <label>Name</label>
            <textarea rows="4"></textarea>
            <?php
            if( $error )
            {
            ?>
            <div class="callout warning">
              <p class="help-text" id="passwordHelpText">Error message</p>
            </div>
            <?php } ?>
          </div>          <div class="medium-8  columns">
            <label>Address</label>
            <input type="text">
            <?php
            if( $error )
            {
            ?>
            <div class="callout warning">
              <p class="help-text" id="passwordHelpText">Error message</p>
            </div>
            <?php } ?>
          </div>
          <div class="medium-8  columns">
            <span>Mexico</span> <input type="checkbox" value="1">
          </div>

          <div class="medium-8  columns">
            <span>Argentina</span> <input type="checkbox" value="2">
          </div>

          <div class="medium-8  columns">
            <span>Venezuela</span> <input type="checkbox" value="3">
          </div>
          <div class="medium-8  columns">
            <span>Colombia</span> <input type="checkbox" value="4">
          </div>
          <div class="medium-8  columns">
            <span>Chile</span> <input type="checkbox" value="5">
          </div>
          <div class="medium-8  columns">
            <span>Guatemala</span> <input type="checkbox" value="6">
          </div>
          <div class="medium-8  columns">
            <span>Ecuador</span> <input type="checkbox" value="7">
          </div>
          <div class="medium-8  columns">
            <span>Spain</span> <input type="checkbox" value="8">
          </div>

          <div class="medium-12  columns">
            <label>Are you an adult?</label>
            Yes <input type="checkbox" value="1" /> No <input type="checkbox" value="0" />
            <?php
            if( $error )
            {
            ?>
            <div class="callout warning">
              <p class="help-text" id="passwordHelpText">Error message</p>
            </div>
            <?php } ?>
          </div>
          <div class="medium-12  columns">
            <label>Subscribe to our developer newsletter?</label>
            PHP <input type="radio" name="radio" value="1" /> JS <input type="radio" name="radio" value="0" />
            <?php
            if( $error )
            {
            ?>
            <div class="callout warning">
              <p class="help-text" id="passwordHelpText">Error message</p>
            </div>
            <?php } ?>
          </div>
          <div class="medium-12  columns">
            <input value="SEND" class="button success hollow" type="submit">
          </div>
        </form>

        

      </div>
    </div>

    

    <div class="row column">
      <hr>
      <ul class="menu">
        <li class="float-right">Copyright Footer</li>
      </ul>
    </div>


    </body>
</html>