<template>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Tag</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                        <li class="breadcrumb-item active">Tag</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="card">
        <div class="card-header d-flex" style="justify-content: space-between;">
            <h1 class="m-0">Tags</h1>
            <button class="btn btn-dark">Add Tag</button>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>1/2/22</td>
                        <td>
                            <button type="button" class="btn btn-dark btn-sm">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm mx-2">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    import mixin from '../common.js';
    export default{
        async created() {
            const res = await this.callApi('post', 'api/create-tag', {name: 'test'});
            console.log(res);
            if(res.status == 200){
                console.log(res);
            }
        },
    }
</script>