import "./index.scss"

wp.blocks.registerBlockType("ourplugin/image-responsive", {
  title: "Professor Callout",
  description: "Include a short description related to block",
  icon: "welcome-learn-more",
  category: "common",
  edit: EditComponent,
  save: function () {
    return null
  }
})

function EditComponent() {
  return (
    <div className="wrapper">
      <div className="container">
        We will have a select dropdown form element here.
      </div>
      <div>
        The HTML preview here.
      </div>
    </div>
  )
}