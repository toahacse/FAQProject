<x-admin.admin_master>

    <x-slot name="title">
        Manage FAQ
    </x-slot>

    <div class="row">
        <div class="col-md-11" style="margin-top: 30px;">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-10">
                            <h4>FAQ management</h4>
                        </div>

                        <div class="col-md-2" style="float: right">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                                Add FAQ
                            </button>
                        </div>
                    </div>
                    <hr/>

                    {{--Show massege included--}}
                    @include('admin.layouts.partials.show_massage')

                    {{--Data Table--}}

                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Question</th>
                            <th>Answer</th>
                            <th width="100px">Action</th>
                        </tr>
                        </thead>
                        <tbody id="data_sortable">
                        @php($i=1)
                        @foreach($faqs as $faq)
                            <tr data-index="{{ $faq->id }}" data-position="{{ $faq->priority }}">
                                <td>{{ $faq->question }}</td>
                                <td>{{$faq->answer}}</td>
                                <td>
                                    @if($faq->publication_status == 1)
                                        <a href="{{ url('/unpublished_faq', ['id'=>$faq->id]) }}"
                                           class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ url('/published_faq', ['id'=>$faq->id]) }}"
                                           class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="#" data-id="{{$faq->id}}" class="btn btn-success btn-xs edit"
                                       data-toggle="modal" data-target="#editModal">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ url('/delete_faq', ['id'=>$faq->id]) }}"
                                       onclick="return confirm('Are You Sure Delete this!!');"
                                       class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>


    {{--Add Model--}}

    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add FAQ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10" style="background: white; padding: 20px">

                            <form action="{{url('/add_faq')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Question:</label>
                                        <input type="text" name="question" class="form-control"
                                               placeholder="Enter Question" required>

                                    </div>

                                    <div class="form-group">
                                        <label>Answer:</label>
                                        <textarea name="answer" class="form-control" required
                                                  placeholder="Answer write here..."></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Priority:</label>
                                        <input type="number" name="priority" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Publication Status: </label>
                                        <input type="radio" required name="publication_status" value="1">Published
                                        <input type="radio" required name="publication_status" value="0">Unpublished
                                    </div>

                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{--Update Model--}}
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit FAQ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10" style="background: white; padding: 20px">

                            <form action="{{url('/update_faq')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Question:</label>
                                        <input type="text" name="question" id="question" class="form-control"
                                               placeholder="Enter Question" required>
                                        <input type="hidden" name="id" id="faq_id" class="form-control"
                                               placeholder="Enter Question" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Answer:</label>
                                        <textarea name="answer" class="form-control" id="answer" required
                                                  placeholder="Answer write here..."></textarea>
                                    </div>

                                    <div id="from_hide" class="form-group">
                                        <label>Priority:</label>
                                        <input type="number" id="priority" name="priority" class="form-control"
                                               required>
                                    </div>

                                    <div class="form-group">
                                        <label>Publication Status: </label>
                                        <input type="radio" required id="published" name="publication_status" value="1">Published
                                        <input type="radio" required id="unpublished" name="publication_status"
                                               value="0">Unpublished
                                    </div>

                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script>

        $('#from_hide').hide();

        $("#data_sortable").sortable({
            update: function (event, ui) {
                $(this).children().each(function (index) {
                    if ($(this).attr('data-position') != (index + 1)) {
                        $(this).attr('data-position', (index + 1)).addClass('update')
                    }
                })
                saveNewPositions();
            }
        });

        function saveNewPositions() {
            var positions = [];
            $('.update').each(function () {
                positions.push([
                    $(this).attr('data-index'),
                    $(this).attr('data-position')
                ]);
            })
            $.ajax({
                methods: "POST",
                url: "{{ url('/priority-set/') }}",
                data: {
                    update: 1,
                    position: positions
                },
                success: function (data) {
                    console.log(data)
                },
                error: function () {
                    window.location.replace(auto_save_url);
                }
            });
        }

    </script>
    <script>
        $("#sortable").sortable();
    </script>

</x-admin.admin_master>