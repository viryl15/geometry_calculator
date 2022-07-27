# geometry_calculator

## Deployment

To deploy and run this project

```bash
  composer install
```

```bash
  symfony server:start
```
#### Notice
_I have create a parent class **GeometryFigure** to facilitate service implementation_

## Test API

### For Triangle model use
> http://127.0.0.1:8000/api/triangle/{a}/{base}/{c}/{height}
_$a, $base and $c are trian sides, $base is the base and $height is the height_

### For Circle model use
> http://127.0.0.1:8000/api/circle/{area}

## To test Service
_I have put static datas directly inside the code for service testing, because datas was not persit in the database_
### To test the sum of areas for two or more given Geometry objects consult (_service_)
> http://127.0.0.1:8000/api/geometry/areas-sum

### To test the sum of circumferences for two or more given Geometry objects consult (_service_)
> http://127.0.0.1:8000/api/geometry/circumferences-sum