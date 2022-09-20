<style>
.multiselect__content-wrapper {
    position: relative;
}

</style>

<template>
    <admin-layout> 
        <section class="content">
            <div class="div container-fluid">
                <div class="row">
                    <div class="div col-12">
                        <div class="div">
                            <div class="card-header">
                              <h3 class="card-title"> Roles &amp; Permission </h3>
                              <div class="card-tools">
                                  <button type="button" class="btn btn-info text-uppercase"
                                  style="letter-spacing: 0.1em;" @click="openModal"> Create </button>
                              </div>
                            </div>
                            <div class="card body table-responsive p-0">
                                <div class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-captilize">Role Name</th>
                                            <th class="text-captilize">Permissions</th>
                                            <th class="text-captilize">Created</th>
                                             <th class="text-captilize text-right">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody> 
                                        <tr v-for="(role,index) in roles" :key="index">
                                          <td> {{ role.name}}</td>
                                          <td>
                                             <div class="d-flex flex-column">
                                                 <span v-for="(permission,index) in role.permissions" :key="index">
                                                  {{ permission.name }}
                                                 </span>
                                             </div>
                                          </td>
                                          <td> {{ role.created_at}}</td>
                                          <td class="text-right">
                                              <button class="btn btn-success" href="#" style="letter-spacing: 0.1em;">
                                                   EDIT
                                              </button>

                                               <button class="btn btn-danger ml-1" href="#" style="letter-spacing: 0.1em;">
                                                   DELETE
                                              </button>
                                            
                                             
                                          </td>
                                        </tr>
                                    </tbody>

                                </div>
                            </div>
                            <div class="card-footer clearfix">
                                 pagination links
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                       <h4 class="model-title">Create New Role</h4>
                        <button type="button" class="close" @click="closeModal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                      <div class="model-body overflow-hidden">
                          <div class="h4">
                              <span>Preview: <span class="text-capitalize"> form name</span>
                              </span>
                          </div>
                          <div class="card card-primary">
                              <form>
                                  <div class="card-body">
                                      <div class="form-group">
                                          <label for="role" class="h4"> Role Name </label>
                                         <input type="text" class="form-control" id="role" 
                                         placeholder="Role Name" v-model="form.name" :class="{'is-valid' 
                                         : form.errors.name}" autofocus="autofocus" autocomplete="off">
                                      </div>
                                      <div class="invalid-feed mb-3" :class="{ 'd-block' : form.errors.name}">
                                              {{ form.errors.name }}
                                      </div>

                                      <div class="form-group">
                                          <label for="permissions" class="h4"> Permissions </label>
                                         <multiselect 
                                         v-model="value" 
                                         :options="options"
                                         :multiple="true"
                                         :taggable="true"
                                         placeholder="Choose Permission(s)"
                                         @addPermissions="addPermissions"
                                         label="name"
                                         track-by="id"
                                         ></multiselect>
                                      </div>
                                      <div class="invalid-feed mb-3" :class="{ 'd-block' : form.errors.permissions}">
                                              {{ form.errors.permissions }}
                                      </div>
                                  </div>

                                  <div class="modal-footer justify-content-between">
                                      <button type="button" class="btn btn-danger 
                                      text-uppercase" style="letter-spacing: 0.1em;" @click="closeModal">Cancel</button>

                                       <button type="submit" class="btn btn-info 
                                      text-uppercase" style="letter-spacing: 0.1em;">Text</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                </div>
            </div>

        </div>
    </admin-layout>
</template>

<script>
import AdminLayout from '@/Layouts/AdminLayout'
export default {
    props: ['roles', 'permissions'],

    components: {
          AdminLayout
    },

     data() {
         return {
           form: this.$inertia.form({
               id: '',
               name: '',
               permissions: []

           }),
           permissionOptions: this.permissions,
         }
     },

     methods: {
         addPermissions(newPermissions){
            let permission = {
            name: newPermissions,
           
          }
          this.permissionOptions.push(permission)
          this.form.permission.push(permission)
         },   
         openModal() {
            $('#modal-lg').modal('show')
     },

     closeModal() {
            $('#modal-lg').modal('hide')
     }
}

}
</script>