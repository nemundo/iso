# Iso Country

### Composer Installation
```
composer require nemundo/iso
```

### Admin Installation
```
(new \Nemundo\App\ModelDesigner\ModelDesignerConfig())->addProject(new \Nemundo\Iso\IsoProject());
```





### Dev Installation
```
git submodule add https://github.com/nemundo/iso.git lib/iso
```

```
$lib = new Library($autoload);
$lib->source = __DIR__ . '/lib/iso/src/';
$lib->namespace = 'Nemundo\\Iso';
```


### Remove Submodule
```
git submodule deinit lib/iso
git rm lib/iso
```





### Source



### Import
```
bin/cmd.php iso-import
```

