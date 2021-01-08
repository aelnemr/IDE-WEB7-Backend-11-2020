<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Project</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Projects</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projects</h3>

            </div>
            <div class="card-body p-2">
                <form method="post" action="?p=add-projects">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">Name: </label>
                                <input type="text" id="name" name="name" class="form-control">
                                <?php
                                if (!empty($_GET['name']) && !empty($_GET['errors'])) :
                                ?>
                                    <p class="alert alert-danger"><?= $_GET['name'] ?></p>
                                <?php
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="project-manager">Project Manager: </label>
                                <input type="text" id="project-manager" name="project_manager" class="form-control">
                                <?php
                                if (!empty($_GET['project_manager']) && !empty($_GET['errors'])) :
                                    ?>
                                    <p class="alert alert-danger"><?= $_GET['project_manager'] ?></p>
                                <?php
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" cols="30" rows="10"
                                      class="form-control"></textarea>
                            <?php
                            if (!empty($_GET['description']) && !empty($_GET['errors'])) :
                                ?>
                                <p class="alert alert-danger"><?= $_GET['description'] ?></p>
                            <?php
                            endif;
                            ?>
                        </div>
                    </div>

                    <div class="card">
                        <div class="form-group p-3">
                            <button type="submit" class="btn btn-success">Save</button>
                            <a href="?p=projects" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>

                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- Default box -->

    </section>
    <!-- /.content -->
</div>