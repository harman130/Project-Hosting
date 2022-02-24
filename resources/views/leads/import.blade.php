<div class="form-inline">
    <div class="form-group col-sm-7" style="padding-left: 0px;">
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{ route('leads-import') }}">
                @csrf
                <div class="form-group">
                    <label for="title">choose leads csvfile</label>
                    <input type="file" name="file" class="form-control" />
                </div>
            </form>
               

            
        </div>
        
    </div>
</div>