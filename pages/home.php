<?php

include ('../partials/header.php');

?>
<body>
    <div class="container-fluid test">
        <?php
            require '../partials/nav-connected.php';
        ?>
    <button class="btn btn--primary " aria-controls="modal-name-4">Show modal window</button>

      <div class="modal modal--animate-translate-down flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal" id="modal-name-4">
  <div class="modal__content width-100% max-width-xs bg radius-md shadow-md flex flex-column" role="alertdialog" aria-labelledby="modal-title-4" aria-describedby="modal-description-4">
    <header class="bg-contrast-lower padding-y-sm padding-x-md flex items-center justify-between flex-shrink-0">
      <h4 class="text-truncate" id="modal-title-4">Modal title</h4>

      <button class="reset modal__close-btn modal__close-btn--inner js-modal__close js-tab-focus">
        <svg class="icon" viewBox="0 0 20 20">
          <title>Close modal window</title>
          <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2">
            <line x1="3" y1="3" x2="17" y2="17" />
            <line x1="17" y1="3" x2="3" y2="17" />
          </g>
        </svg>
      </button>
    </header>

    <div class="padding-y-sm padding-x-md flex-grow overflow-auto momentum-scrolling">
      <div class="text-component">
        <p id="modal-description-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae culpa, inventore alias ab atque similique quod ea reprehenderit.</p>

        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias dignissimos ratione ducimus dolor illo itaque eveniet soluta, beatae, asperiores magnam quaerat cumque, distinctio error voluptatum quidem cum numquam voluptate commodi.</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint perferendis vel animi laborum nobis aut rerum voluptas quam ipsa soluta.</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet accusantium provident nulla minus velit, voluptas voluptatem in libero hic quaerat saepe quae, labore, qui illo eum ullam ea. Repudiandae excepturi aut earum ipsa vitae modi, non eos hic? Atque fugit ullam est ab nam numquam id pariatur, esse voluptates, ipsa aperiam consequatur laboriosam perspiciatis. Nemo culpa reprehenderit tenetur alias dolor veritatis ducimus, numquam ipsa incidunt harum dolorem quod perspiciatis autem quis soluta, nobis assumenda aliquam perferendis ut commodi inventore sunt.</p>
      </div>
    </div>

    <footer class="padding-y-sm padding-x-md bg shadow-md flex-shrink-0">
      <div class="flex justify-end gap-xs">
        <button class="btn btn--subtle js-modal__close">Cancel</button>
        <button class="btn btn--primary">Go!</button>
      </div>
    </footer>
  </div>

</div>
    </div>
<?php
        require '../partials/footer.php';
    ?>
</body>
</html>