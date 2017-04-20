module.exports = function (grunt) {
    require('load-grunt-tasks')(grunt);
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        bower_concat: {
            all: {
                dest: {
                    js: 'public/dist/bower.js',
                    css: 'public/dist/bower.css'
                },
                mainFiles:{
                    'bootstrap':['dist/css/bootstrap.css']
                }
            }
        },
        uglify:{
            my_target:{
                files:{
                   'public/dist/bower.min.js': ['public/dist/bower.js']
                }
            }
        },
        copy: {
            bootstrap: {
                files: [
                    {expand: true, src: ['fonts/**'], dest: 'public/', cwd: 'bower_components/bootstrap'}
                ]
            }
        }
    });
    grunt.registerTask('makeFiles',['bower_concat', 'copy:bootstrap', 'uglify'])
};