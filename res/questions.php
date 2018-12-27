<div class = "question-box-soft" style = "display:none;">
    <form method = "post" id = "soft-form" action = "test.php" role = "form">
    <div class="form-group">
            <label for="sel1" class = "question">Select Android Version</label>
            <select class="form-control" id="sel-os" name = "sel-os">
            <option>--None Selected--</option>
                <option>Ice Cream Sandwich (v4.0 - v4.0.4)</option>
                <option>Jelly Bean (v4.1 - v4.3.1)</option>
                <option>KitKat (v4.4 - v4.4.4)</option>
                <option>Lollipop (v5.0 - v5.1.1)</option>
                <option>Marshmallow (v6.0 - v6.0.1)</option>
                <option>Nougat (v7.0 - v7.1.2)</option>
                <option>Oreo (v8.0 - v8.1)</option>
            </select>
    </div>
    <div class="form-group">
            <label for="sel1" class = "question">Select Software Issue</label>
            <select class="form-control" id="sel-soft-issue" name = "sel-soft-issue">
                <option>--None Selected--</option>
                <option>Battery</option>
                <option>Operating System</option>
                <option>Internet Connection</option>
                <option>Mobile Hotspot</option>
                <option>Bluetooth</option>
                <option>Messages</option>
                <option>Power Options</option>              
            </select>
    </div>
    <div class = "new">
    <?php
      include "res/soft_ques.php";
    ?>
    </div>
      <div class="button-box">
           <button class="button">Perform Diagnosis!</button>
      </div>
    </form>
                  
</div>
<div class = "question-box-hard" style = "display:none;">
<form method = "post" id = "hard-form" action = "test.php" role = "form">
<div class="form-group">
            <label for="sel1" class = "question">Select Hardware Issue</label>
            <select class="form-control" id="sel-hard-issue" name="sel-hard-issue" >
                <option>--None Selected--</option>
                <option>Battery</option>
                <option>Display</option>
                <option>Power Issues</option>
                <option>Camera</option>
                <option>Charging</option>
                <option>USB</option>
            </select>
    </div>
    <div class = "new">
    <?php
      include "res/hard_ques.php";
    ?>
    </div>
        <div class="button-box">
           <button class="button">Perform Diagnosis!</button>
      </div>

</div>