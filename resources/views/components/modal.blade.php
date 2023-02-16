@props(['listing'])
<!-- Modal -->
<div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure ?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('destroy', $listing->id) }}" method="post" class="">
                <div class="modal-body">

                    @csrf
                    @method('DELETE')
                    <input type="checkbox" name="" id="confirmDel" required>
                    <label for="confirmDel">Confirm Delete</label>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Yes Delete!</button>
                </div>
            </form>
        </div>
    </div>
</div>
