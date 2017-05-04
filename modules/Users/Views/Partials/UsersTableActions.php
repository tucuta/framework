<div class='btn-group pull-right' role='group' aria-label='...'>
    <a class='btn btn-sm btn-warning' href='<?= site_url('admin/users/' .$user->id .'?length=' .$length .'&offset=' .$offset); ?>' title='<?= __d('users', 'Show the Details'); ?>' role='button'><i class='fa fa-search'></i></a>
    <a class='btn btn-sm btn-success' href='<?= site_url('admin/users/' .$user->id .'/edit?length=' .$length .'&offset=' .$offset); ?>' title='<?= __d('users', 'Edit this User'); ?>' role='button'><i class='fa fa-pencil'></i></a>
    <a class='btn btn-sm btn-danger' href='#' data-toggle='modal' data-target='#modal_delete_user' data-id='<?= $user->id ?>' title='<?= __d('users', 'Delete this User'); ?>' role='button'><i class='fa fa-remove'></i></a>
</div>
