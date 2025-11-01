document.getElementById('nascimento').addEventListener('change', function () {
  const nascimento = new Date(this.value);
  const hoje = new Date();
  let idade = hoje.getFullYear() - nascimento.getFullYear();
  const m = hoje.getMonth() - nascimento.getMonth();
  if (m < 0 || (m === 0 && hoje.getDate() < nascimento.getDate())) {
    idade--;
  }
  document.getElementById('idade').value = idade;
});
$(document).ready(function () {
  $('#addExperiencia').click(function () {
    const experiencia = `
      <div class="card p-3 mb-3">
        <div class="mb-2">
          <label class="form-label">Empresa:</label>
          <input type="text" name="empresa[]" class="form-control" required>
        </div>
        <div class="mb-2">
          <label class="form-label">Cargo:</label>
          <input type="text" name="cargo[]" class="form-control" required>
        </div>
        <div class="mb-2">
          <label class="form-label">Período:</label>
          <input type="text" name="periodo[]" class="form-control" placeholder="Ex: 2020 - 2023" required>
        </div>
        <button type="button" class="btn btn-danger btn-sm removerExp">Remover</button>
      </div>`;
    $('#experiencias').append(experiencia);
  });
  $(document).on('click', '.removerExp', function () {
    $(this).parent().remove();
  });
});