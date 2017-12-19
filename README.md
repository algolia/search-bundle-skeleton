# Algolia Search Bundle Skeleton

**Everything you need to plug your own engine.**

This repository is a skeleton project, that gives you all the boilerplace
to integrate your own engine to the 
[`algolia/search-bundle`](http://github.com/algolia/search-bundle) package.

### Creating a package

If you want to create package to integrate your favorite search engine with
the [`algolia/search-bundle`](http://github.com/algolia/search-bundle) bundle, you
can follow these simple steps to help you get started.

### 1. Download this project

Download the files, rename the directory to the name you want to use for your package.

### 2. Update `composer.json`

By default, the package is called `algolia/search-bundle-skeleton`, rename it to the name
you want to use.

### 3. Rename Namespace and classes

First you need to change the namespace used in the`autoload` key of your `composer.json` file.
Then, all namespace should be replace. You can use the _search and replace_ feature of your IDE.

All classes ship with a default name prefixed with Example. You probably want to rename that.

### 4. Implement all the things

The `ExampleEngine` and `ExampleSettingsManager` have empty definitions for all method, it's now
time to implement all these method.

## Update service declaration in your project

Now, if you want to use your new engine, you can update the service
declaration in your main project.

You need to override the 2 necessary service `search.engine` and `search.settings_manager`.

```yaml
services:
    search.engine:
        class: Algolia\SearchBundleSkeleton\Engine\ExampleEngine
        public: true

    search.settings_manager:
        class: Algolia\SearchBundleSkeleton\Settings\ExampleSettingsManager
        public: true
```
