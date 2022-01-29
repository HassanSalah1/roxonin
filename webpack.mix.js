const mix = require('laravel-mix')

const sassOptions = {
  precision: 5,
  includePaths: ['node_modules', 'resources/assets/'],
}

/*  ################# Dashboard ################# */

//  Admin Images and fonts
mix.copy('resources/images/', 'public/images/')
mix.copy('resources/fonts/', 'public/fonts/')

//  Admin CSS
mix
  .sass('resources/sass/core.scss', 'public/css', { sassOptions })
  .sass('resources/sass/overrides.scss', 'public/css', { sassOptions })
  .sass('resources/sass/base/custom-rtl.scss', 'public/css-rtl', { sassOptions })
  .sass('resources/sass/base/core/menu/menu-types/vertical-menu.scss', 'public/css/base/core/menu/menu-types', {
    sassOptions,
  })
  .sass('resources/sass/base/plugins/forms/form-validation.scss', 'public/css/base/plugins/forms', {
    sassOptions,
  })

//  Admin Vendors Css
mix.copy('resources/vendors/css/vendors-rtl.min.css', 'public/vendors/css/vendors-rtl.min.css')
mix.copy('resources/vendors/css/vendors.min.css', 'public/vendors/css/vendors.min.css')
mix.copy('resources/vendors/css/forms/select/select2.min.css', 'public/vendors/css/forms/select/select2.min.css')

// Admin Datatable
mix.copy('resources/vendors/css/tables/datatable/dataTables.bootstrap5.min.css', 'public/vendors/css/tables/datatable/dataTables.bootstrap5.min.css')
mix.copy('resources/vendors/css/tables/datatable/responsive.bootstrap4.min.css', 'public/vendors/css/tables/datatable/responsive.bootstrap4.min.css')
mix.copy('resources/vendors/css/tables/datatable/buttons.bootstrap5.min.css', 'public/vendors/css/tables/datatable/buttons.bootstrap5.min.css')
mix.copy('resources/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css', 'public/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css')

//  Admin JS
mix.js('resources/js/core/app-menu.js', 'public/js/core')
mix.js('resources/js/core/app.js', 'public/js/core')
mix.js('resources/js/scripts/forms/form-validation.js', 'public/js/scripts/forms')
mix.js('resources/js/scripts/forms/form-select2.js', 'public/js/scripts/forms')

//  Admin Vendors JS
mix.copy('resources/vendors/js/vendors.min.js', 'public/vendors/js/vendors.min.js')
mix.copy('resources/vendors/js/ui/jquery.sticky.js', 'public/vendors/js/ui/jquery.sticky.js')
mix.copy('resources/vendors/js/forms/select/select2.full.min.js', 'public/vendors/js/forms/select/select2.full.min.js')

// Admin Datatable
mix.copy('resources/vendors/js/tables/datatable/jquery.dataTables.min.js', 'public/vendors/js/tables/datatable/jquery.dataTables.min.js')
mix.copy('resources/vendors/js/tables/datatable/dataTables.bootstrap5.min.js', 'public/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')
mix.copy('resources/vendors/js/tables/datatable/dataTables.responsive.min.js', 'public/vendors/js/tables/datatable/dataTables.responsive.min.js')
mix.copy('resources/vendors/js/tables/datatable/responsive.bootstrap4.min.js', 'public/vendors/js/tables/datatable/responsive.bootstrap4.min.js')
mix.copy('resources/vendors/js/tables/datatable/datatables.checkboxes.min.js', 'public/vendors/js/tables/datatable/datatables.checkboxes.min.js')
mix.copy('resources/vendors/js/tables/datatable/datatables.buttons.min.js', 'public/vendors/js/tables/datatable/datatables.buttons.min.js')
mix.copy('resources/vendors/js/tables/datatable/jszip.min.js', 'public/vendors/js/tables/datatable/jszip.min.js')
mix.copy('resources/vendors/js/tables/datatable/pdfmake.min.js', 'public/vendors/js/tables/datatable/pdfmake.min.js')
mix.copy('resources/vendors/js/tables/datatable/vfs_fonts.js', 'public/vendors/js/tables/datatable/vfs_fonts.js')
mix.copy('resources/vendors/js/tables/datatable/buttons.html5.min.js', 'public/vendors/js/tables/datatable/buttons.html5.min.js')
mix.copy('resources/vendors/js/tables/datatable/buttons.print.min.js', 'public/vendors/js/tables/datatable/buttons.print.min.js')
mix.copy('resources/vendors/js/tables/datatable/dataTables.rowGroup.min.js', 'public/vendors/js/tables/datatable/dataTables.rowGroup.min.js')
mix.js('resources/js/scripts/tables/table-datatables-basic.js', 'public/js/scripts/tables')

/*  ################# Website ################# */

mix
  .js('resources/js/app.js', 'public/js')
  .postCss('resources/css/app.css', 'public/css', [require('postcss-import'), require('tailwindcss'), require('autoprefixer')])

// Cache versioning
if (mix.inProduction()) {
  mix.version()
}
