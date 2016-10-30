<div class="login-box">
  <div class="login-logo">
    <b><?= __('QHERP') ?></b>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg"><?= __('Sign in to start your session') ?></p>

    <?= $this->Form->create(); ?>
      <div class="form-group has-feedback">
        <?= $this->Form->input('username', ['type' => 'text', 'class' => 'form-control', 'label' => false, 'placeholder' => __('Username')]); ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <?= $this->Form->input('password', ['type' => 'password', 'class' => 'form-control', 'label' => false, 'placeholder' => __('Password')]); ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-sm-6">
        </div>
        <div class="col-sm-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat"><?= __('Sign In') ?></button>
        </div>
      </div>
    <?= $this->Form->end(); ?>

  </div>
</div>