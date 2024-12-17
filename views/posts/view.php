<?php view('partials/header'); ?>

<main class="container">
  <table class="table">
    <tr>
      <th>
        ID
      </th>
      <td><?= $post->id ?></td>
    </tr>
    <tr>
      <th>
        Title
      </th>
      <td><?= $post->title ?></td>
    </tr>
    <tr>
      <th>
        Content
      </th>
      <td><?= $post->body ?></td>
    </tr>
    <!-- <tr>
      <th>
        Created At
      </th>
      <td><?= $post->createdAt ?></td>
    </tr>
    <tr>
      <th>
        Updated At
      </th>
      <td><?= $post->updatedAt ?></td>
    </tr> -->
  </table>
</main>

<?php view('partials/footer'); ?>