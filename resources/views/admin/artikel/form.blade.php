{!! Form::model($model, [
    'route' => $model->exists ? ['artikel.update', $model->id] : 'artikel.store',
    'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="" class="control-label">Title</label>
          {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) !!}
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="" class="control-label">status</label>
          {!! Form::text('status', null, ['class' => 'form-control', 'id' => 'status']) !!}
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="" class="control-label">Content</label>
      {!! Form::textarea('body', null, ['class' => 'form-control', 'id' => 'body']) !!}
    </div>
{!! Form::close() !!}

<script type="text/javascript">

$(document).ready(function () {
          $('#body').summernote({
              // dialogsInBody: true,
              height: 300,
              // minHeight: null,
              // maxHeight: null,
              toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['fontname', ['fontname']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture']]
              ]
          });
      });

      $(document).on("show.bs.modal", '.modal', function (event) {
          console.log("Global show.bs.modal fire");
          var zIndex = 100000 + (10 * $(".modal:visible").length);
          $(this).css("z-index", zIndex);
          setTimeout(function () {
              $(".modal-backdrop").not(".modal-stack").first().css("z-index", zIndex - 1).addClass("modal-stack");
          }, 0);
      }).on("hidden.bs.modal", '.modal', function (event) {
          console.log("Global hidden.bs.modal fire");
          $(".modal:visible").length && $("body").addClass("modal-open");
      });
      $(document).on('inserted.bs.tooltip', function (event) {
          console.log("Global show.bs.tooltip fire");
          var zIndex = 100000 + (10 * $(".modal:visible").length);
          var tooltipId = $(event.target).attr("aria-describedby");
          $("#" + tooltipId).css("z-index", zIndex);
      });
      $(document).on('inserted.bs.popover', function (event) {
          console.log("Global inserted.bs.popover fire");
          var zIndex = 100000 + (10 * $(".modal:visible").length);
          var popoverId = $(event.target).attr("aria-describedby");
          $("#" + popoverId).css("z-index", zIndex);
      });
</script>
