
    <select class="form-control selectpicker" name="<?php echo e($name); ?>" <?php if(isset($submit) && $submit): ?> v-on:change="submit" <?php endif; ?>>
        <?php if(isset($optional) && $optional): ?><option value> ----- </option><?php endif; ?>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(is_numeric($key)): ?>
                <option value="<?php echo e($value); ?>" <?php if(isset($selected) && $selected == $value): ?> selected="selected" <?php endif; ?>><?php echo e($value); ?></option>
            <?php else: ?>
                <option value="<?php echo e($key); ?>" <?php if(isset($selected) && $selected == $key): ?> selected="selected" <?php endif; ?>><?php echo e($value); ?></option>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
<?php /**PATH /media/reza/14b062b7-7b1b-444c-b04e-64d55e1a8761/Laravel/peoplepro117 [Source Lengkap Aplikasi HRIS HRD Absensi Payroll Karyawan Laravel PHP]/peoplepro117 [Source Lengkap Aplikasi HRIS HRD Absensi Payroll Karyawan Laravel PHP]/peoplepro/resources/views/vendor/translation/forms/select.blade.php ENDPATH**/ ?>